<?php

namespace Scipper\Statuscodes;

/**
 * 
 * @author Steffen Kowalski <scipper@myscipper.de>
 *
 * @namespace Scipper/Statuscodes
 * @package Scipper/Statuscodes
 *
 */
class Statuscodes {
	
	const Informational_Continue = 100;
	const Informational_Switching_Protocols = 101;
	const Informational_Processing = 102;
	
	const Success_OK = 200;
	const Success_Created = 201;
	const Success_Accepted = 202;
	const Success_Non_Authoritative_Information = 203;
	const Success_No_Content = 204;
	const Success_Reset_Content = 205;
	const Success_Partial_Content = 206;
	const Success_Multi_Status = 207;
	const Success_Already_Reported = 208;
	const Success_IM_Used = 226;
	
	const Redirection_Multiple_Choices = 300;
	const Redirection_Moved_Permanently = 301;
	const Redirection_Found = 302;
	const Redirection_See_Other = 303;
	const Redirection_Not_Modified = 304;
	const Redirection_Use_Proxy = 305;
	const Redirection_Switch_Proxy = 306;
	const Redirection_Temporary_Redirect = 307;
	const Redirection_Permanent_Redirect = 308;
	
	const Client_Error_Bad_Request = 400;
	const Client_Error_Unauthorized = 401;
	const Client_Error_Payment_Required = 402;
	const Client_Error_Forbidden = 403;
	const Client_Error_Not_Found = 404;
	const Client_Error_Method_Not_Allowed = 405;
	const Client_Error_Not_Acceptable = 406;
	const Client_Error_Proxy_Authentication_Required = 407;
	const Client_Error_Request_Timeout = 408;
	const Client_Error_Conflict = 409;
	const Client_Error_Gone = 410;
	const Client_Error_Length_Required = 411;
	const Client_Error_Precondition_Failed = 412;
	const Client_Error_Request_Entity_Too_Large = 413;
	const Client_Error_Request_URI_Too_Long = 414;
	const Client_Error_Unsupported_Media_Type = 415;
	const Client_Error_Requested_Range_Not_Satisfiable = 416;
	const Client_Error_Expectation_Failed = 417;
	const Client_Error_I_m_a_teapot = 418;
	const Client_Error_Authentication_Timeout = 419;
	const Client_Error_Method_Failure = 420;
	const Client_Error_Unprocessable_Entity = 422;
	const Client_Error_Locked = 423;
	const Client_Error_Failed_Dependency = 424;
	const Client_Error_Upgrade_Required = 426;
	const Client_Error_Precondition_Required = 428;
	const Client_Error_Too_Many_Requests = 429;
	const Client_Error_Request_Header_Fields_Too_Large = 431;
	const Client_Error_Login_Timeout = 440;
	const Client_Error_No_Response = 444;
	const Client_Error_Retry_With = 449;
	const Client_Error_Blocked_By_Windows_Parental_Controls = 450;
	const Client_Error_Redirect = 451;
	const Client_Error_Request_Header_Too_Large = 494;
	const Client_Error_Cert_Error = 495;
	const Client_Error_No_Cert = 496;
	const Client_Error_HTTP_To_HTTPS = 497;
	const Client_Error_Token_Expired_Invalid = 498;
	const Client_Error_Client_Closed_Request = 499;
	
	const Server_Error_Internal_Server_Error = 500;
	const Server_Error_Not_Implemented = 501;
	const Server_Error_Bad_Gateway = 502;
	const Server_Error_Service_Unavailable = 503;
	const Server_Error_Gateway_Timeout = 504;
	const Server_Error_HTTP_Version_Not_Supported = 505;
	const Server_Error_Variant_Also_Negotiates = 506;
	const Server_Error_Insufficient_Storage = 507;
	const Server_Error_Loop_Detected = 508;
	const Server_Error_Bandwidth_Limit_Exceeded = 509;
	const Server_Error_Not_Extended = 510;
	const Server_Error_Network_Authentication_Required = 511;
	const Server_Error_Origin_Error = 520;
	const Server_Error_Web_Server_Is_Down = 521;
	const Server_Error_Connection_Timed_Out = 522;
	const Server_Error_Proxy_Declined_Request = 523;
	const Server_Error_A_Timeout_Occurred = 524;
	const Server_Error_Network_Read_Timeout_Error = 598;
	const Server_Error_Network_Connect_Timeout_Error = 599;
	
}
