<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;
use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Use this method to copy messages of any kind. The method is analogous to the method forwardMessages, but the copied
 * message doesn't have a link to the original message. Returns the MessageId of the sent message on success.
 *
 * Class CopyMessage
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#copymessage
 */
class CopyMessage extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Unique identifier for the chat where the original message was sent (or channel username in the format
     * @channelusername)
     * @var string
     */
    public string $from_chat_id;
    /**
     * Message identifier in the chat specified in from_chat_id
     * @var int
     */
    public int $message_id;
    /**
     * New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Mode for parsing entities in the new caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * List of special entities that appear in the new caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = false;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var int|null
     */
    public ?int $reply_to_message_id = null;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply = false;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     * @var KeyboardInterface|string
     */
    public $reply_markup = '';

    public function __construct($chat_id, $from_chat_id, $message_id)
    {
        $this->chat_id = $chat_id;
        $this->from_chat_id = $from_chat_id;
        $this->message_id = $message_id;
    }
}