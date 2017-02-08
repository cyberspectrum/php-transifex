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
 * @link http://docs.transifex.com/api/resources/
 */
class Resource extends AbstractApi
{
    /**
     * Get information about a resource within a project.
     *
     * @param string $project  The slug for the project the resource is part of.
     * @param string $resource The resource slug within the project.
     * @param bool   $details  True to retrieve additional project details.
     *
     * @return array
     */
    public function show($project, $resource, $details = false)
    {
        return $this->get(
            '/api/2/project/' . rawurlencode($project) . '/resource/' . rawurlencode($resource),
            $details ? ['details' => null] : []
        );
    }

    /**
     * Get the content of a resource within a project.
     *
     * @param string $project  The slug for the project the resource is part of.
     * @param string $resource The resource slug within the project.
     *
     * @return string
     */
    public function download($project, $resource)
    {
        return $this->get(
            '/api/2/project/' . rawurlencode($project) . '/resource/' . rawurlencode($resource) . '/content/'
        );
    }

    /**
     * Get information about a project's resources.
     *
     * @param string $project The slug for the project to retrieve details for.
     *
     * @return array
     */
    public function all($project)
    {
        return $this->get('/api/2/project/' . rawurlencode($project) . '/resources');
    }

    /**
     * Create a resource.
     *
     * @param string $project  The slug for the project.
     * @param string $name     The name of the resource.
     * @param string $slug     The slug for the resource.
     * @param string $fileType The file type of the resource.
     * @param array  $options  Optional additional params to send with the request.
     *
     * @return array
     *
     * @throws \InvalidArgumentException If the file does not exist.
     */
    public function create($project, $name, $slug, $fileType, array $options = [])
    {
        // Build the required request data.
        $data = $this->addOptions(
            $options,
            [
                'accept_translations',
                'category',
                'priority',
            ],
            [
                'name'      => $name,
                'slug'      => $slug,
                'i18n_type' => $fileType,
            ]
        );

        // Attach the resource data - it should be in the content key if this is a string or the file key if it's a file
        if (isset($options['content'])) {
            $data['content'] = $options['content'];
        } elseif (isset($options['file'])) {
            if (!file_exists($options['file'])) {
                throw new \InvalidArgumentException(
                    sprintf('The specified file, "%s", does not exist.', $options['file'])
                );
            }
            $data['content'] = file_get_contents($options['file']);
        }

        return $this->post('/api/2/project/' . $project . '/resources/', $data);
    }

    /**
     * Update the content of a resource within a project.
     *
     * @param string $project  The slug for the project the resource is part of.
     * @param string $resource The resource slug within the project.
     * @param string $content  The content of the resource, this can either be a string of data or a file path.
     * @param string $type     The type of content in the $content variable, this should be either string or file.
     *
     * @return array
     *
     * @throws \InvalidArgumentException If the file does not exist.
     */
    public function upload($project, $resource, $content, $type = 'string')
    {
        // Verify the content type is allowed
        if (!in_array($type, ['string', 'file'])) {
            throw new \InvalidArgumentException('The content type must be specified as file or string.');
        }
        if ($type == 'file') {
            if (!file_exists($content)) {
                throw new \InvalidArgumentException(
                    sprintf('The specified file, "%s", does not exist.', $content)
                );
            }
            $content = file_get_contents($content);
        }

        return $this->put(
            '/api/2/project/' . rawurlencode($project) . '/resource/' . rawurlencode($resource) . '/content/',
            ['content' => $content]
        );
    }

    /**
     * Delete a resource within a project.
     *
     * @param string $project  The slug for the project the resource is part of.
     * @param string $resource The resource slug within the project.
     *
     * @return array
     */
    public function remove($project, $resource)
    {
        return $this->delete('/api/2/project/' . rawurlencode($project) . '/resource/' . rawurlencode($resource));
    }
}
