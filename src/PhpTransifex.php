<?php

/**
 * This file is part of cyberspectrum/php-transifex.
 *
 * (c) 2017 Christian Schiffler.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    PhpTransifex
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2017 Christian Schiffler.
 * @license    https://github.com/cyberspectrum/php-transifex/blob/master/LICENSE MIT
 * @filesource
 */

namespace CyberSpectrum\PhpTransifex;

use CyberSpectrum\PhpTransifex\HttpClient\Builder;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator;
use CyberSpectrum\PhpTransifex\Model\ProjectModel;
use Http\Message\UriFactory;
use RuntimeException;

/**
 * This class is the initiator of the high level API.
 */
class PhpTransifex
{
    /**
     * The client instance.
     *
     * @var Client
     */
    private $client;

    /**
     * Create a new instance.
     *
     * @param Client $client The client instance.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create a project instance.
     *
     * @param string $slug The project slug.
     *
     * @return ProjectModel
     *
     * @throws RuntimeException When the project does not exist.
     */
    public function project($slug)
    {
        $project = new ProjectModel(new ProjectHydrator($this->client, ['slug' => $slug]));
        if (!$project->hydrator()->exists()) {
            throw new RuntimeException('Project must exist. Please use method ' . __CLASS__ . '::createProject()');
        }
        return $project;
    }

    /**
     * Create a project instance.
     *
     * @param string      $slug               The project slug.
     * @param string      $name               The project name.
     * @param string      $description        The project description.
     * @param string      $sourceLanguageCode The source language code.
     * @param bool|string $repositoryUrl      The repository URL for open source projects or false for closed source.
     *
     * @return ProjectModel
     */
    public function createProject($slug, $name, $description, $sourceLanguageCode, $repositoryUrl = false)
    {
        $data = [
            'slug'                 => $slug,
            'name'                 => $name,
            'description'          => $description,
            'source_language_code' => $sourceLanguageCode,
        ];

        if (false === $repositoryUrl) {
            $data['private'] = true;
        } else {
            $data['repository_url'] = $repositoryUrl;
        }

        return new ProjectModel(new ProjectHydrator($this->client, $data));
    }

    /**
     * Create an instance.
     *
     * @param string       $loginOrToken      Transifex username or token.
     * @param null|string  $password          Transifex password or null if token is passed as username.
     * @param Builder|null $httpClientBuilder The client builder.
     * @param UriFactory   $uriFactory        The URI factory to use.
     *
     * @return PhpTransifex
     */
    public static function create(
        $loginOrToken,
        $password = null,
        Builder $httpClientBuilder = null,
        UriFactory $uriFactory = null
    ) {
        $client = new Client($httpClientBuilder, $uriFactory);
        $client->authenticate($loginOrToken, $password);

        return new static($client);
    }
}
