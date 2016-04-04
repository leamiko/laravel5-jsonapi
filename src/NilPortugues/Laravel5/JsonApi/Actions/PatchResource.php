<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 5/04/16
 * Time: 0:17.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Laravel5\JsonApi\Actions;

/**
 * Class PatchResource.
 */
class PatchResource extends \NilPortugues\Api\JsonApi\Server\Actions\PatchResource
{
    /**
     * @param \Exception $e
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function getErrorResponse(\Exception $e)
    {
        if (env('APP_DEBUG')) {
            throw $e;
        }

        return parent::getErrorResponse($e);
    }
}
