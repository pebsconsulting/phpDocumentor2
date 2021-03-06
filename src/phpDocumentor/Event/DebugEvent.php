<?php
declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Mike van Riel <mike.vanriel@naenius.com>
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Event;

use Psr\Log\LogLevel;

/**
 * Event representing some debugging information for phpDocumentor.
 *
 * The information logged by this event will only be visible if the verbose
 * option is provided to phpDocumentor.
 */
class DebugEvent extends EventAbstract
{
    /** @var string Message to display with the debugging event */
    protected $message = '';

    /** @var string Default priority level for these events is DEBUG */
    protected $priority = LogLevel::DEBUG;

    /** @var string[] Extra parameters to insert into the message after translation */
    protected $context = [];

    /**
     * Provides the message that is to be shown with this event.
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Returns the message that was provided with this event.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Returns the priority level associated with this logging event.
     */
    public function getPriority(): string
    {
        return $this->priority;
    }

    /**
     * Sets additional context (parameters) to use when translating messages.
     *
     * @param string[] $context
     */
    public function setContext(array $context): self
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Returns the context for this event.
     *
     * @return string[]
     */
    public function getContext(): array
    {
        return $this->context;
    }
}
