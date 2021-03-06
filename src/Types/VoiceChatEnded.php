<?php


namespace Klev\TelegramBotApi\Types;

/**
 * This object represents a service message about a voice chat ended in the chat.
 *
 * @see https://core.telegram.org/bots/api#voicechatended
 *
 * Class VoiceChatEnded
 * @package Klev\TelegramBotApi\Types
 */
class VoiceChatEnded extends BaseType
{
    /**
     * Voice chat duration; in seconds
     * @var int
     */
    public int $duration;
}