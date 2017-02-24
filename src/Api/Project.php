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

namespace CyberSpectrum\PhpTransifex\Api;

/**
 * Transifex API Projects class.
 *
 * @link http://docs.transifex.com/developer/api/projects
 */
class Project extends AbstractApi
{
    /**
     * Fields allowed in create.
     */
    const ALLOWED_CREATE = [
        'slug',
        'source_language_code',
        'long_description',
        'private',
        'homepage',
        'trans_instructions',
        'tags',
        'maintainers',
        'team',
        'auto_join',
        'license',
        'fill_up_resources',
        'repository_url',
        'organization',
        'archived',
        'name',
        'description',
    ];

    const ALLOWED_UPDATE = [
        'long_description',
        'private',
        'homepage',
        'trans_instructions',
        'tags',
        'maintainers',
        'team',
        'auto_join',
        'license',
        'fill_up_resources',
        'repository_url',
        'organization',
        'archived',
        'name',
        'description',
    ];

    /**
     * Method to get information about a project.
     *
     * Returns:
     * {
     *   "archived":             bool,
     *   "last_updated":         datetime,
     *   "description":          string,
     *   "tags":                 string,
     *   "trans_instructions":   string,
     *   "private":              bool,
     *   "slug":                 string,
     *   "source_language_code": string,
     *   "auto_join":            bool,
     *   "maintainers":          [
     *     {
     *       "username":         string
     *     }
     *   ],
     *   "fill_up_resources":    false,
     *   "team": {
     *     "id":                 int,
     *     "name":               string
     *   },
     *   "organization": {
     *     "slug":               string
     *   },
     *   "teams": [
     *                           string
     *   ],
     *   "homepage":             string,
     *   "long_description":     string,
     *   "resources":            [
     *     {
     *     "slug":               string,
     *     "name":               string
     *   ],
     *   "name":                 string
     *   }
     *
     * @param string  $project The project to retrieve details for.
     * @param boolean $details True to retrieve additional project details.
     *
     * @return array The project details from the API.
     */
    public function show($project, $details = false)
    {
        return $this->get('/api/2/project/' . rawurlencode($project), $details ? ['details' => null] : []);
    }

    /**
     * Method to create a project.
     *
     * @param array $options The params to send with the request.
     *
     * @return array|string
     */
    public function create(array $options = [])
    {
        // Build the request data.
        $data = $this->filterData($options, self::ALLOWED_CREATE);

        // Send the request.
        return $this->post('/api/2/projects/', $data);
    }

    /**
     * Method to create a project.
     *
     * @param string $name           The name of the project.
     * @param string $slug           The slug for the project.
     * @param string $description    A description of the project.
     * @param string $sourceLanguage The source language code for the project.
     * @param array  $options        Optional additional params to send with the request.
     *
     * @return array|string
     *
     * @throws \InvalidArgumentException If no project URL given but marked as open source.
     */
    public function createProject($name, $slug, $description, $sourceLanguage, array $options = [])
    {
        // Send the request.
        return $this->create(
            array_merge(
                $options,
                [
                    'name'                 => $name,
                    'slug'                 => $slug,
                    'description'          => $description,
                    'source_language_code' => $sourceLanguage
                ]
            )
        );
    }

    /**
     * Method to remove a project.
     *
     * @param string $slug The slug for the project.
     *
     * @return array
     */
    public function remove($slug)
    {
        return $this->delete('/api/2/project/' . $slug);
    }

    /**
     * Method to get a list of projects the user is part of.
     *
     * @return array The list of projects from the API.
     */
    public function all()
    {
        return $this->get('/api/2/projects/');
    }

    /**
     * Update a project.
     *
     * @param string $slug    The slug for the project.
     * @param array  $options Additional params to send with the request.
     *
     * @return array|string
     */
    public function update($slug, array $options)
    {
        return $this->put('/api/2/project/' . $slug . '/', $this->filterData($options, self::ALLOWED_UPDATE));
    }

    /**
     * Build the data array to send with create and update requests.
     *
     * @param array $options      The params to send with the request.
     *
     * @param array $validOptions The allowed option names.
     *
     * @return array
     */
    private function filterData(array $options, array $validOptions = [])
    {
        $data = $this->addOptions($options, $validOptions);

        // Check the license if present.
        $this->checkLicense($data);

        return $data;
    }

    /**
     * Checks that a license is an accepted value.
     *
     * @param array $data The data to check.
     *
     * @return void
     *
     * @throws \InvalidArgumentException When the license is invalid.
     */
    private function checkLicense($data)
    {
        if (isset($data['license'])) {
            // Ensure the license option is an allowed value
            $accepted = ['proprietary', 'permissive_open_source', 'other_open_source'];
            if (!in_array($data['license'], $accepted)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'The license %s is not valid, accepted license values are %s',
                        $data['license'],
                        implode(', ', $accepted)
                    )
                );
            }
        }

        // Check mandatory fields.
        if (!isset($data['license']) || 'proprietary' === $data['license']) {
            return;
        }

        if (!isset($data['repository_url'])) {
            throw new \InvalidArgumentException(
                'If a project is denoted either as permissive_open_source or other_open_source, ' .
                'the field repository_url is mandatory and should contain a link to the public repository ' .
                'of the project to be created.'
            );
        }
    }
}
