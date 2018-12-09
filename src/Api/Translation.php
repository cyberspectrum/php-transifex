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
 * Transifex API Translations class.
 *
 * @link http://docs.transifex.com/api/translations/
 */
class Translation extends AbstractApi
{
    /**
     * Get translations on a specified resource.
     *
     * @param string $project  The slug for the project to pull from.
     * @param string $resource The slug for the resource to pull from.
     * @param string $lang     The language to return the translation for.
     * @param string $mode     The mode of the downloaded file (default, reviewed, translator).
     *
     * @return array
     */
    public function show($project, $resource, $lang, $mode = 'default')
    {
        $parameters = [];
        if (!empty($mode)) {
            $parameters = [
                'mode' => $mode,
                'file' => null
            ];
        }

        return $this->get(
            '/api/2/project/' . rawurlencode($project) .
            '/resource/' . rawurlencode($resource) .
            '/translation/' . rawurlencode($lang),
            $parameters
        );
    }

    /**
     * Update the content of a translation within a project.
     *
     * @param string $project  The project the resource is part of.
     * @param string $resource The resource slug within the project.
     * @param string $lang     The language to return the translation for.
     * @param string $content  The content of the resource, this can either be a string of data or a file path.
     * @param string $type     The type of content in the $content variable, this should be either string or file.
     *
     * @return array
     *
     * @throws \InvalidArgumentException If the file does not exist.
     */
    public function update($project, $resource, $lang, $content, $type = 'string')
    {
        // Verify the content type is allowed
        if (!in_array($type, ['string', 'file'])) {
            throw new \InvalidArgumentException('The content type must be specified as file or string.');
        }
        if ('file' === $type) {
            if (!file_exists($content)) {
                throw new \InvalidArgumentException(
                    sprintf('The specified file, "%s", does not exist.', $content)
                );
            }
            $content = file_get_contents($content);
        }

        return $this->put(
            '/api/2/project/' . rawurlencode($project) .
            '/resource/' . rawurlencode($resource) .
            '/translation/' . rawurlencode($lang),
            ['content' => $content]
        );
    }
}
