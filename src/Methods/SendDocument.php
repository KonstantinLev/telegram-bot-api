<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\MessageEntity;

/**
 * Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of
 * any type of up to 50 MB in size, this limit may be changed in the future.
 *
 * Class SendDocument
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#senddocument
 */
class SendDocument extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * File to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using
     * multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $document;
    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
     * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not
     * exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can
     * be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded
     * using multipart/form-data under <file_attach_name>. More info on Sending Files »
     * @var string|null
     */
    public ?string $thumb = null;
    /**
     * Document caption (may also be used when resending documents by file_id), 0-1024 characters after entities parsing
     * @var string|null
     */
    public ?string $caption = '';
    /**
     * Mode for parsing entities in the document caption. See formatting options for more details.
     * @var string|null
     */
    public ?string $parse_mode = 'html';
    /**
     * List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]|null
     */
    public ?array $caption_entities = null;
    /**
     * Disables automatic server-side content type detection for files uploaded using multipart/form-data
     * @var bool|null
     */
    public ?bool $disable_content_type_detection = null;
    /**
     * Sends the message silently. Users will receive a notification with no sound.
     * @var bool|null
     */
    public ?bool $disable_notification = false;
    /**
     * If the message is a reply, ID of the original message
     * @var int|null
     */
    public ?int $reply_to_message_id = null;
    /**
     * Pass True, if the message should be sent even if the specified replied-to message is not found
     * @var bool|null
     */
    public ?bool $allow_sending_without_reply = null;
    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     * @var string
     */
    public $reply_markup = '';

    public function __construct(string $chat_id, string $document)
    {
        $this->chat_id = $chat_id;
        $this->document = $document;
    }
}