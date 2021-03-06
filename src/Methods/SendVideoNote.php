<?php

namespace Klev\TelegramBotApi\Methods;

use Klev\TelegramBotApi\Types\KeyboardInterface;

/**
 * As of v.4.0, Telegram clients support rounded square mp4 videos of up to 1 minute long. Use this method to send
 * video messages. On success, the sent Message is returned.
 *
 * Class SendVideoNote
 * @package Klev\TelegramBotApi\Methods
 *
 * @see https://core.telegram.org/bots/api#sendvideonote
 */
class SendVideoNote extends BaseMethod
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public string $chat_id;
    /**
     * Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass
     * an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using
     * multipart/form-data. More info on Sending Files »
     * @var string
     */
    public string $video_note;
    /**
     * Duration of sent video in seconds
     * @var int|null
     */
    public ?int $duration = null;
    /**
     * Video width and height, i.e. diameter of the video message
     * @var int|null
     */
    public ?int $length = null;
    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
     * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not
     * exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be
     * only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More info on Sending Files »
     * @var string|null
     */
    public ?string $thumb = null;
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
     * @var KeyboardInterface|string
     */
    public $reply_markup = '';

    public function __construct(string $chat_id, string $video_note)
    {
        $this->chat_id = $chat_id;
        $this->video_note = $video_note;
    }
}