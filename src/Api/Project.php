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
     * Method to get information about a project.
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
    public function create($name, $slug, $description, $sourceLanguage, array $options = [])
    {
        // Build the request data.
        $data = $this->filterData(
            $options,
            [
                'name'                 => $name,
                'slug'                 => $slug,
                'description'          => $description,
                'source_language_code' => $sourceLanguage
            ]
        );

        // Check mandatory fields.
        if (!isset($data['license']) || in_array($data['license'], ['permissive_open_source', 'other_open_source'])) {
            if (!isset($data['repository_url'])) {
                throw new \InvalidArgumentException(
                    'If a project is denoted either as permissive_open_source or other_open_source, ' .
                    'the field repository_url is mandatory and should contain a link to the public repository ' .
                    'of the project to be created.'
                );
            }
        }

        // Send the request.
        return $this->post('/api/2/projects/', $data);
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
        return $this->post('/api/2/project/' . $slug . '/', $this->filterData($options));
    }

    /**
     * Build the data array to send with create and update requests.
     *
     * @param array $options Optional additional params to send with the request.
     *
     * @param array $data    The data to add the options to.
     *
     * @return array
     */
    private function filterData(array $options, array $data = [])
    {
        // Check the license if present.
        if (isset($options['license'])) {
            $this->checkLicense($options['license']);
        }

        $data = $this->addOptions(
            $options,
            [
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
            ],
            $data
        );

        return $data;
    }

    /**
     * Checks that a license is an accepted value.
     *
     * @param string $license The license to check.
     *
     * @return void
     *
     * @throws \InvalidArgumentException When the license is invalid.
     */
    private function checkLicense($license)
    {
        $accepted = ['proprietary', 'permissive_open_source', 'other_open_source'];
        // Ensure the license option is an allowed value
        if (!in_array($license, $accepted)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The license %s is not valid, accepted license values are %s',
                    $license,
                    implode(', ', $accepted)
                )
            );
        }
    }
}
