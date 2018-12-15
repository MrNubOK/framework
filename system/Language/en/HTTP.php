<?php

/**
 * HTTP language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2018 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// CurlRequest
   'missingCurl'                => 'CURL must be enabled to use the CURLRequest class.',
   'invalidSSLKey'              => 'Cannot set SSL Key. {0} is not a valid file.',
   'sslCertNotFound'            => 'SSL certificate not found at: {0}',
   'curlError'                  => '{0} : {1}',

	// IncomingRequest
   'invalidNegotiationType'     => '{0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.',

	// Message
   'invalidHTTPProtocol'        => 'Invalid HTTP Protocol Version. Must be one of: {0}',

	// Negotiate
   'emptySupportedNegotiations' => 'You must provide an array of supported values to all Negotiations.',

	// RedirectResponse
   'invalidRoute'               => '{0, string} route cannot be found while reverse-routing.',

	// DownloadResponse
   'cannotSetBinary'            => 'When setting filepath can not set binary.',
   'cannotSetFilepath'          => 'When setting binary can not set filepath: {0}',
   'notFoundDownloadSource'     => 'Not found download body source.',
   'cannotSetCache'             => 'It does not supported caching for downloading.',
   'cannotSetStatusCode'        => 'It does not supported chnage status code for downloading. code: {0}, reason: {1}',

	// Response
   'missingResponseStatus'      => 'HTTP Response is missing a status code',
   'invalidStatusCode'          => '{0, string} is not a valid HTTP return status code',
   'unknownStatusCode'          => 'Unknown HTTP status code provided with no message: {0}',

	// URI
   'cannotParseURI'             => 'Unable to parse URI: {0}',
   'segmentOutOfRange'          => 'Request URI segment is our of range: {0}',
   'invalidPort'                => 'Ports must be between 0 and 65535. Given: {0}',
   'malformedQueryString'       => 'Query strings may not include URI fragments.',

	// Page Not Found
   'pageNotFound'               => 'Page Not Found',
   'emptyController'            => 'No Controller specified.',
   'controllerNotFound'         => 'Controller or its method is not found: {0}::{1}',
   'methodNotFound'             => 'Controller method is not found: {0}',

	// CSRF
   'disallowedAction'           => 'The action you requested is not allowed.',

	// Uploaded file moving
   'alreadyMoved'               => 'The uploaded file has already been moved.',
   'invalidFile'                => 'The original file is not a valid file.',
   'moveFailed'                 => 'Could not move file {0} to {1} ({2})',
];
