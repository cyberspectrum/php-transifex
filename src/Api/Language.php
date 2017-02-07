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
 * Transifex API Languages class.
 *
 * @link http://docs.transifex.com/api/languages/
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class Language extends AbstractApi
{
    /**
     * Get a list of languages for a specified project.
     *
     * @param string $project The project to retrieve details for.
     *
     * @return array
     */
    public function all($project)
    {
        return $this->get('/api/2/project/' . rawurlencode($project) . '/languages/');
    }

    /**
     * Get information about a given language in a project.
     *
     * @param string $project  The project to retrieve details for.
     * @param string $langCode The language code to retrieve details for.
     *
     * @return array
     */
    public function show($project, $langCode)
    {
        return $this->get('/api/2/project/' . rawurlencode($project) . '/language/' . rawurlencode($langCode) . '/');
    }

    /**
     * Create a language for a project.
     *
     * @param string   $slug         The slug for the project.
     * @param string   $langCode     The language code for the new language.
     * @param string[] $coordinators An array of coordinators for the language.
     * @param array    $options      Optional additional params to send with the request.
     * @param bool     $skipBadUsers If true, the call does not fail and instead will return a list of bad usernames.
     *
     * @return array
     *
     * @throws \InvalidArgumentException When the coordinators are empty.
     */
    public function create($slug, $langCode, array $coordinators, array $options = [], $skipBadUsers = false)
    {
        // Make sure the $coordinators array is not empty
        if (!count($coordinators)) {
            throw new \InvalidArgumentException('The coordinators array must contain at least one username.');
        }

        $uri = $this->uriFactory->createUri('/api/2/project/' . rawurlencode($slug) . '/languages/');

        if ($skipBadUsers) {
            $uri = $uri->withQuery('skip_invalid_username');
        }

        // Build the required request data.
        $data = [
            'language_code' => $langCode,
            'coordinators'  => $coordinators,
        ];

        // Loop through the valid options and if we have them, add them to the request data
        foreach (['translators', 'reviewers', 'list'] as $option) {
            if (isset($options[$option])) {
                $data[$option] = $options[$option];
            }
        }

        return $this->post($uri, $data);
    }

    /**
     * Delete a language within a project.
     *
     * @param string $project  The project to retrieve details for.
     * @param string $langCode The language code to retrieve details for.
     *
     * @return array
     */
    public function remove($project, $langCode)
    {
        return $this->delete('/api/2/project/' . rawurlencode($project) . '/language/' . rawurlencode($langCode) . '/');
    }

    /**
     * Update a language within a project.
     *
     * @param string   $slug         The slug for the project.
     * @param string   $langCode     The language code for the new language.
     * @param string[] $coordinators An array of coordinators for the language.
     * @param array    $options      Optional additional params to send with the request.
     *
     * @return array
     *
     * @throws \InvalidArgumentException When the coordinators are empty.
     */
    public function update($slug, $langCode, array $coordinators, array $options = [])
    {
        // Make sure the $coordinators array is not empty
        if (!count($coordinators)) {
            throw new \InvalidArgumentException('The coordinators array must contain at least one username.');
        }

        // Build the required request data.
        $data = ['coordinators' => $coordinators];

        // Set the translators if present
        if (isset($options['translators'])) {
            $data['translators'] = $options['translators'];
        }

        // Set the reviewers if present
        if (isset($options['reviewers'])) {
            $data['reviewers'] = $options['reviewers'];
        }

        return $this->put(
            '/api/2/project/' . rawurlencode($slug) . '/language/' . rawurlencode($langCode) . '/',
            $data
        );
    }

    /**
     * Get the coordinators for a language team in a project.
     *
     * @param string $project  The project to retrieve details for.
     * @param string $langCode The language code to retrieve details for.
     *
     * @return array
     */
    public function coordinators($project, $langCode)
    {
        return $this->get(
            '/api/2/project/' . rawurlencode($project) . '/language/' . rawurlencode($langCode) . '/coordinators/'
        );
    }

    /**
     * Get the reviewers for a language team in a project.
     *
     * @param string $project  The project to retrieve details for.
     * @param string $langCode The language code to retrieve details for.
     *
     * @return array
     */
    public function reviewers($project, $langCode)
    {
        return $this->get(
            '/api/2/project/' . rawurlencode($project) . '/language/' . rawurlencode($langCode) . '/reviewers/'
        );
    }

    /**
     * Get the translators for a language team in a project.
     *
     * @param string $project  The project to retrieve details for.
     * @param string $langCode The language code to retrieve details for.
     *
     * @return array
     */
    public function translators($project, $langCode)
    {
        return $this->get(
            '/api/2/project/' . rawurlencode($project) . '/language/' . rawurlencode($langCode) . '/translators/'
        );
    }

    /**
     * Update the coordinators for a language team in a project.
     *
     * @param string   $project      The project to retrieve details for.
     * @param string   $langCode     The language code to retrieve details for.
     * @param string[] $coordinators An array of coordinators for the language.
     * @param bool     $skipBadUsers If true, the call does not fail and instead will return a list of bad usernames.
     *
     * @return array
     */
    public function updateCoordinators($project, $langCode, array $coordinators, $skipBadUsers = false)
    {
        return $this->updateTeam($project, $langCode, $coordinators, $skipBadUsers, 'coordinators');
    }

    /**
     * Update the reviewers for a language team in a project.
     *
     * @param string   $project      The project to retrieve details for.
     * @param string   $langCode     The language code to retrieve details for.
     * @param string[] $reviewers    An array of reviewers for the language.
     * @param bool     $skipBadUsers If true, the call does not fail and instead will return a list of bad usernames.
     *
     * @return array
     */
    public function updateReviewers($project, $langCode, array $reviewers, $skipBadUsers = false)
    {
        return $this->updateTeam($project, $langCode, $reviewers, $skipBadUsers, 'reviewers');
    }

    /**
     * Update the translators for a language team in a project.
     *
     * @param string   $project      The project to retrieve details for.
     * @param string   $langCode     The language code to retrieve details for.
     * @param string[] $translators  An array of translators for the language.
     * @param bool     $skipBadUsers If true, the call does not fail and instead will return a list of bad usernames.
     *
     * @return array
     */
    public function updateTranslators($project, $langCode, array $translators, $skipBadUsers = false)
    {
        return $this->updateTeam($project, $langCode, $translators, $skipBadUsers, 'translators');
    }

    /**
     * Base method to update a given language team in a project.
     *
     * @param string   $project      The project to retrieve details for.
     * @param string   $langCode     The language code to retrieve details for.
     * @param string[] $members      An array of the team members for the language.
     * @param bool     $skipBadUsers If true, the call does not fail and instead will return a list of bad usernames.
     * @param string   $team         The team to update.
     *
     * @return array
     *
     * @throws \InvalidArgumentException If the array is empty.
     */
    private function updateTeam($project, $langCode, array $members, $skipBadUsers, $team)
    {
        // Make sure the $members array is not empty
        if (!count($members)) {
            throw new \InvalidArgumentException('The ' . $team . ' array must contain at least one username.');
        }

        $uri = $this->uriFactory->createUri(
            '/api/2/project/' . rawurlencode($project) . '/language/' . rawurlencode($langCode) . '/' .
            rawurlencode($team) . '/'
        );

        if ($skipBadUsers) {
            $uri = $uri->withQuery('skip_invalid_username');
        }

        return $this->put($uri, $members);
    }
}
