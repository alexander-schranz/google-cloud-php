<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job_service.proto

namespace Google\Cloud\Talent\V4beta1\SearchJobsRequest;

/**
 * A string-represented enumeration of the job search mode. The service
 * operate differently for different modes of service.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.SearchJobsRequest.SearchMode</code>
 */
class SearchMode
{
    /**
     * The mode of the search method isn't specified.
     *
     * Generated from protobuf enum <code>SEARCH_MODE_UNSPECIFIED = 0;</code>
     */
    const SEARCH_MODE_UNSPECIFIED = 0;
    /**
     * The job search matches against all jobs, and featured jobs
     * (jobs with promotionValue > 0) are not specially handled.
     *
     * Generated from protobuf enum <code>JOB_SEARCH = 1;</code>
     */
    const JOB_SEARCH = 1;
    /**
     * The job search matches only against featured jobs (jobs with a
     * promotionValue > 0). This method doesn't return any jobs having a
     * promotionValue <= 0. The search results order is determined by the
     * promotionValue (jobs with a higher promotionValue are returned higher up
     * in the search results), with relevance being used as a tiebreaker.
     *
     * Generated from protobuf enum <code>FEATURED_JOB_SEARCH = 2;</code>
     */
    const FEATURED_JOB_SEARCH = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchMode::class, \Google\Cloud\Talent\V4beta1\SearchJobsRequest_SearchMode::class);
