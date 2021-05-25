<?php

/**
 * A json response helper for lumen|laravel framework.
 *
 * @author    iluckin <dev@iluckin.cn>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://dev.iluckin.cn/open-source
 */

namespace Turbo\Api\Helper;

abstract class Code
{
    const CONTINUE = 1000;
    const SWITCHING_PROTOCOLS = 1010;
    const PROCESSING = 1020;
    const EARLY_HINTS = 1030;
    const OK = 2000;
    const CREATED = 2010;
    const ACCEPTED = 2020;
    const NON_AUTHORITATIVE_INFORMATION = 2030;
    const NO_CONTENT = 2040;
    const RESET_CONTENT = 2050;
    const PARTIAL_CONTENT = 2060;
    const MULTI_STATUS = 2070;          // RFC4918
    const ALREADY_REPORTED = 2080;      // RFC5842
    const IM_USED = 2260;               // RFC3229
    const MULTIPLE_CHOICES = 3000;
    const MOVED_PERMANENTLY = 3010;
    const FOUND = 3020;
    const SEE_OTHER = 3030;
    const NOT_MODIFIED = 3040;
    const USE_PROXY = 3050;
    const RESERVED = 3060;
    const TEMPORARY_REDIRECT = 3070;
    const PERMANENTLY_REDIRECT = 3080;  // RFC7238
    const BAD_REQUEST = 4000;
    const UNAUTHORIZED = 4010;
    const PAYMENT_REQUIRED = 4020;
    const FORBIDDEN = 4030;
    const NOT_FOUND = 4040;
    const METHOD_NOT_ALLOWED = 4050;
    const NOT_ACCEPTABLE = 4060;
    const PROXY_AUTHENTICATION_REQUIRED = 4070;
    const REQUEST_TIMEOUT = 4080;
    const CONFLICT = 4090;
    const GONE = 4100;
    const LENGTH_REQUIRED = 4110;
    const PRECONDITION_FAILED = 4120;
    const REQUEST_ENTITY_TOO_LARGE = 4130;
    const REQUEST_URI_TOO_LONG = 4140;
    const UNSUPPORTED_MEDIA_TYPE = 4150;
    const REQUESTED_RANGE_NOT_SATISFIABLE = 4160;
    const EXPECTATION_FAILED = 4170;
    const I_AM_A_TEAPOT = 4180;
    const MISDIRECTED_REQUEST = 4210;
    const UNPROCESSABLE_ENTITY = 4220;
    const LOCKED = 4230;
    const FAILED_DEPENDENCY = 4240;
    const TOO_EARLY = 4250;
    const UPGRADE_REQUIRED = 4260;
    const PRECONDITION_REQUIRED = 4280;
    const TOO_MANY_REQUESTS = 4290;
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 4310;
    const UNAVAILABLE_FOR_LEGAL_REASONS = 4510;
    const INTERNAL_SERVER_ERROR = 5000;
    const NOT_IMPLEMENTED = 5010;
    const BAD_GATEWAY = 5020;
    const SERVICE_UNAVAILABLE = 5030;
    const GATEWAY_TIMEOUT = 5040;
    const VERSION_NOT_SUPPORTED = 5050;
    const VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 5060;                        // RFC2295
    const INSUFFICIENT_STORAGE = 5070;                                        // RFC4918
    const LOOP_DETECTED = 5080;                                               // RFC5842
    const NOT_EXTENDED = 5100;                                                // RFC2774
    const NETWORK_AUTHENTICATION_REQUIRED = 5110;                             // RFC6585
    const FAIL = 5555;

    /**
     * @var string[] $messages
     */
    private static $messages = [
        self::CONTINUE                              => 'Continue',
        self::SWITCHING_PROTOCOLS                   => 'Switching Protocols',
        self::PROCESSING                            => 'Processing',
        self::EARLY_HINTS                           => 'Early Hints',
        self::OK                                    => 'OK',
        self::CREATED                               => 'Created',
        self::ACCEPTED                              => 'Accepted',
        self::NON_AUTHORITATIVE_INFORMATION         => 'Non-Authoritative Information',
        self::NO_CONTENT                            => 'No Content',
        self::RESET_CONTENT                         => 'Reset Content',
        self::PARTIAL_CONTENT                       => 'Partial Content',
        self::MULTI_STATUS                          => 'Multi-Status',
        self::ALREADY_REPORTED                      => 'Already Reported',
        self::IM_USED                               => 'IM Used',
        self::MULTIPLE_CHOICES                      => 'Multiple Choices',
        self::MOVED_PERMANENTLY                     => 'Moved Permanently',
        self::FOUND                                 => 'Found',
        self::SEE_OTHER                             => 'See Other',
        self::NOT_MODIFIED                          => 'Not Modified',
        self::USE_PROXY                             => 'Use Proxy',
        self::RESERVED                              => 'Reserved',
        self::TEMPORARY_REDIRECT                    => 'Temporary Redirect',
        self::PERMANENTLY_REDIRECT                  => 'Permanent Redirect',
        self::BAD_REQUEST                           => 'Bad Request',
        self::UNAUTHORIZED                          => 'Unauthorized',
        self::PAYMENT_REQUIRED                      => 'Payment Required',
        self::FORBIDDEN                             => 'Forbidden',
        self::NOT_FOUND                             => 'Not Found',
        self::METHOD_NOT_ALLOWED                    => 'Method Not Allowed',
        self::NOT_ACCEPTABLE                        => 'Not Acceptable',
        self::PROXY_AUTHENTICATION_REQUIRED         => 'Proxy Authentication Required',
        self::REQUEST_TIMEOUT                       => 'Request Timeout',
        self::CONFLICT                              => 'Conflict',
        self::GONE                                  => 'Gone',
        self::LENGTH_REQUIRED                       => 'Length Required',
        self::PRECONDITION_FAILED                   => 'Precondition Failed',
        self::REQUEST_ENTITY_TOO_LARGE              => 'Request Entity Too Large',
        self::REQUEST_URI_TOO_LONG                  => 'Request URI Too Long',
        self::UNSUPPORTED_MEDIA_TYPE                => 'Unsupported Media Type',
        self::REQUESTED_RANGE_NOT_SATISFIABLE       => 'Requested Range Not Satisfiable',
        self::EXPECTATION_FAILED                    => 'Expectation Failed',
        self::I_AM_A_TEAPOT                         => 'I\'m a teapot',
        self::MISDIRECTED_REQUEST                   => 'Misdirected Request',
        self::UNPROCESSABLE_ENTITY                  => 'Unprocessable Entity',
        self::LOCKED                                => 'Locked',
        self::FAILED_DEPENDENCY                     => 'Failed Dependency',
        self::TOO_EARLY                             => 'Too Early',
        self::UPGRADE_REQUIRED                      => 'Upgrade Required',
        self::PRECONDITION_REQUIRED                 => 'Precondition Required',
        self::TOO_MANY_REQUESTS                     => 'Too Many Requests',
        self::REQUEST_HEADER_FIELDS_TOO_LARGE       => 'Request Header Fields Too Large',
        self::UNAVAILABLE_FOR_LEGAL_REASONS         => 'Unavailable For Legal Reasons',
        self::INTERNAL_SERVER_ERROR                 => 'Internal Server Error',
        self::NOT_IMPLEMENTED                       => 'Not Implemented',
        self::BAD_GATEWAY                           => 'Bad Gateway',
        self::SERVICE_UNAVAILABLE                   => 'Service Unavailable',
        self::GATEWAY_TIMEOUT                       => 'Gateway Timeout',
        self::VERSION_NOT_SUPPORTED                 => 'HTTP Version Not Supported',
        self::VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL  => 'Variant Also Negotiates',
        self::INSUFFICIENT_STORAGE                  => 'Insufficient Storage',
        self::LOOP_DETECTED                         => 'Loop Detected',
        self::NOT_EXTENDED                          => 'Not Extended',
        self::NETWORK_AUTHENTICATION_REQUIRED       => 'Network Authentication Required',
        self::FAIL                                  => 'Fail'
    ];

    /**
     * @param int $code
     * @return string
     */
    public static function getStatusText(int $code): string
    {
        return ucfirst(self::getMessages()[$code] ?? 'Unknown');
    }

    /**
     * @return string[]
     */
    public static function getMessages(): array
    {
        return self::$messages;
    }
}
