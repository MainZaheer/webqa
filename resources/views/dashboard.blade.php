@extends('layouts.app')
@section("content")

<div class="content-inner">
    <div class="content-inner-header">
        <h2 class="content-title">Website QA</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="card-custom card-custom-height">
            <div class="card-body-url">
            <h5 class="label-url">Enter the URL you want to test</h5>
            <form class="d-flex sart-test">
                <input class="form-control me-2 custom-input" id="input_test" name="input_test" type="search" placeholder="http://site.example.com" aria-label="Search">
                <button class="btn btn-orange button-width btn-rounded btn-custom" type="submit">Start Test</button>
            </form>
            <div class="dropdown">
                <a href="#" class="customize-test" href="#" role="button" id="dropdown_menu_link" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                Customize test
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown_menu_link">
                <div class="row row-dropdown">

                    <div class="col-md-auto">
                    <div class="accordion" id="accordion_example1">
                        <div class="accordion-item accordion-item-custom">
                        <h2 class="accordion-header" id="heading_one">
                            <button class="accordion-button accordion-button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_1" checked>
                                <label class="form-check-label" for="checkbox_1">
                                Meta Tags
                                </label>
                            </div>
                            </button>
                        </h2>
                        <div id="collapse_1" class="accordion-collapse collapse show" aria-labelledby="heading_one" data-bs-parent="#accordion_example1">
                            <div class="accordion-body accordion-body-custom">
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_2" checked>
                                <label class="form-check-label" for="checkbox_2">Meta Title</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_3" checked>
                                <label class="form-check-label" for="checkbox_3">Meta Description</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_4" checked>
                                <label class="form-check-label" for="checkbox_4">Canonical Tag</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_5" checked>
                                <label class="form-check-label" for="checkbox_5">Robots Meta Tag</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_6">
                                <label class="form-check-label" for="checkbox_6">URL Slug</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_7">
                                <label class="form-check-label" for="checkbox_7">OG Description</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_8">
                                <label class="form-check-label" for="checkbox_8">OG Image</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_9">
                                <label class="form-check-label" for="checkbox_9">OG Type</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_10">
                                <label class="form-check-label" for="checkbox_10">Twitter Title</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_11">
                                <label class="form-check-label" for="checkbox_11">Twitter Description</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox_12">
                                <label class="form-check-label" for="checkbox_12">Twitter Image</label>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-auto">
                    <div class="accordion" id="accordion_example2">
                        <div class="accordion-item accordion-item-custom">
                        <h2 class="accordion-header" id="heading_one">
                            <button class="accordion-button accordion-button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check_1" checked>
                                <label class="form-check-label" for="check_1">
                                Images
                                </label>
                            </div>
                            </button>
                        </h2>
                        <div id="collapse_2" class="accordion-collapse collapse show" aria-labelledby="heading_one" data-bs-parent="#accordion_example2">
                            <div class="accordion-body accordion-body-custom">
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="check_2">
                                <label class="form-check-label" for="check_2">Alternative Text</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="check_3">
                                <label class="form-check-label" for="check_3">File Name</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="check_4">
                                <label class="form-check-label" for="check_4">File Size</label>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-auto">
                    <div class="accordion" id="accordion_example3">
                        <div class="accordion-item accordion-item-custom">
                        <h2 class="accordion-header" id="heading_one">
                            <button class="accordion-button accordion-button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="other_1">
                                <label class="form-check-label" for="other_1">
                                Other Checks
                                </label>
                            </div>
                            </button>
                        </h2>
                        <div id="collapse_3" class="accordion-collapse collapse show" aria-labelledby="heading_one" data-bs-parent="#accordion_example3">
                            <div class="accordion-body accordion-body-custom">
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_2">
                                <label class="form-check-label" for="other_2">Duplicate Content</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_3">
                                <label class="form-check-label" for="other_3">Robots.txt</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_4">
                                <label class="form-check-label" for="other_4">Mobile Reponsiveness</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_5">
                                <label class="form-check-label" for="other_5">Open Graph Checks</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_6">
                                <label class="form-check-label" for="other_6">XML Sitemap</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_7">
                                <label class="form-check-label" for="other_7">HTML Sitemap</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_8">
                                <label class="form-check-label" for="other_8">Broken Links</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="other_9">
                                <label class="form-check-label" for="other_9">Redirect Loops</label>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-auto">
                    <div class="accordion" id="accordion_example4">
                        <div class="accordion-item accordion-item-custom">
                        <h2 class="accordion-header" id="heading_one">
                            <button class="accordion-button accordion-button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="performance_1">
                                <label class="form-check-label" for="performance_1">
                                Performance and page speed
                                </label>
                            </div>
                            </button>
                        </h2>
                        <div id="collapse_4" class="accordion-collapse collapse show" aria-labelledby="heading_one" data-bs-parent="#accordion_example4">
                            <div class="accordion-body accordion-body-custom">
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="performance_2">
                                <label class="form-check-label" for="performance_2">Google Page Speed (Dekstop)</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="performance_3">
                                <label class="form-check-label" for="performance_3">Google Page Speed (Mobile)</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="performance_4">
                                <label class="form-check-label" for="performance_4">GT Matrix Page Score</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="performance_5">
                                <label class="form-check-label" for="performance_5">GT Matrix Yslow score</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="performance_6">
                                <label class="form-check-label" for="performance_6">Fully Loaded Time</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="performance_7">
                                <label class="form-check-label" for="performance_7">Lighthouse Audit (Dekstop)</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="performance_8">
                                <label class="form-check-label" for="performance_8">Lighthouse Audit (Mobile)</label>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-auto">
                    <div class="accordion" id="accordion_example5">
                        <div class="accordion-item accordion-item-custom">
                        <h2 class="accordion-header" id="heading_one">
                            <button class="accordion-button accordion-button-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="performance_1">
                                <label class="form-check-label" for="performance_1">
                                Server and security
                                </label>
                            </div>
                            </button>
                        </h2>
                        <div id="collapse_5" class="accordion-collapse collapse show" aria-labelledby="heading_one" data-bs-parent="#accordion_example5">
                            <div class="accordion-body accordion-body-custom">
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="server_2">
                                <label class="form-check-label" for="server_2">HTTP Test</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="server_3">
                                <label class="form-check-label" for="server_3">Safe Browsing Test</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="server_4">
                                <label class="form-check-label" for="server_4">Server Signature Test</label>
                            </div>
                            <div class="form-check form-check-custom">
                                <input class="form-check-input" type="checkbox" value="" id="server_5">
                                <label class="form-check-label" for="server_5">Directory Browsing Test</label>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
                </div>
            </div>

            <div class="row my-url">
                <div class="col-6">
                <label class="label-type-url" for="type_url">Type of URL</label>
                <select name="type_url" id="type_url" class="form-control custom-input">
                    <option>Website page - live</option>
                    <option>Website page - live</option>
                    <option>Website page - live</option>
                    <option>Website page - live</option>
                    <option>Website page - live</option>
                    <option>Website page - live</option>
                </select>
                </div>
                <div class="col-6">
                <label class="label-type-url" for="root_domain">Root Domain</label>
                <input type="text" name="root_domain" id="root_domain" class="form-control custom-input">
                </div>
            </div>
            <div class="progress-item">
                <div class="d-flex justify-content-between align-items-center mb-2">
                <small class="text-muted">Progress</small>
                <small class="text-muted">60%</small>
                </div>
                <div class="progress progress-rounded">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="card-custom card-custom-height">
            <div class="card-body-web">
            <h5 class="label-web-test">Website Tested</h5>
            <div class="text-link">https://www.setmore.com/salon</div>
            <div class="row mb-42">
                <div class="col-md-4 text-center">
                <div class="progress-circle-box mb-38">
                    <svg class="big-circle">
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="progress-description">
                    <small class="text-muted text-center d-block mb-2">Test Score</small>
                    <h4 class="label-bold text-center">90/100</h4>
                    </div>
                </div>
                </div>
                <div class="col-md-8">
                <div class="progress-item mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">Meta Tags</small>
                    <small class="text-muted">25/100</small>
                    </div>
                    <div class="progress progress-rounded">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-item mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">Images</small>
                    <small class="text-muted">55/100</small>
                    </div>
                    <div class="progress progress-rounded">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-item mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">Performance</small>
                    <small class="text-muted">60/100</small>
                    </div>
                    <div class="progress progress-rounded">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-item mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">Server And Security</small>
                    <small class="text-muted">85/100</small>
                    </div>
                    <div class="progress progress-rounded">
                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="flex-grow-1"></div>
                <a class="custom-link d-inline-flex align-items-center mr-download" href="#"><div class="excel-icon"></div><span class="label-icon">Download XLS</span></a>
                <a class="custom-link d-inline-flex align-items-center" href="#"><div class="pdf-icon"></div><span class="label-icon">Download PDF</span></a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Checkbox Section -->

    <div class="position-relative mb-5">
        <div class="move-right-position" data-bs-toggle="modal" data-bs-target="#scoring_scale">
        <input class="form-check-input" name="hide_item" type="checkbox" value="" id="hide_item">
        <label class="mx-2 form-check-label" for="hide_item">
            Hide Item Passed
        </label>
        </div>
    </div>

    <!-- Card Custom -->

    <div class="card-custom">
        <div class="card-custom-header align-items-center d-flex">
        <h5 class="label-header">Meta Tags</h5>
        <div class="flex-grow-1 d-sm-block d-md-none"></div>
        <div class="progress-item mr-meta">
            <p class="label-meta">4 Failed</p>
            <div class="progress progress-rounded progress-mini">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="progress-item mr-meta">
            <p class="label-meta">4 Warning</p>
            <div class="progress progress-rounded progress-mini">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="progress-item">
            <p class="label-meta">4 Passed</p>
            <div class="progress progress-rounded progress-mini">
            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        </div>

        <!-- Card cutom body -->

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-check"></div> Meta Title
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-success">PASS.</span> Your webpage is using a title tag
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content mb-3">
                <div class="sub-text-status mb-2"><span class="label-bold">Title Tag -</span> <span class="text-muted">How To Disable Chrome Incognito Mode On Windows And Mac</span></div>
                <div class="sub-text-status"><span class="label-bold">H1 Heading Tag -</span> <span class="text-muted">How To Disable Chrome Incognito Mode On Windows And Mac</span></div>
            </div>
            <p class="text-status-detail">Length - <span class="text-success-custom">62 characters</span> | Casing - <span class="text-success-custom">Camel Casing</span></p>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Meta Title
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Your webpage is using a title tag
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <ul class="pl-20">
                <li class="list-status">Title tag is more than 65 characters</li>
                <li class="list-status">Title tag is not in camel casing or sentence casing</li>
                <li class="list-status">Title tag is exactly equal to the H1 Heading tag</li>
            </ul>
            <div class="custom-card-content mb-3">
                <div class="sub-text-status mb-2"><span class="label-bold">Title Tag -</span> <span class="text-muted">How To Disable Chrome Incognito Mode On Windows And Mac</span></div>
                <div class="sub-text-status"><span class="label-bold">H1 Heading Tag -</span> <span class="text-muted">How To Disable Chrome Incognito Mode On Windows And Mac</span></div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
                <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Meta Title
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Your webpage is using a title tag
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content mb-3">
                <div class="sub-text-status"><span class="label-bold">Title Tag -</span> <span class="text-muted">How To Disable Chrome Incognito Mode On Windows And Mac</span></div>
            </div>
            <p class="text-status-detail">Length - <span class="text-success-custom">62 characters</span> | Casing - <span class="text-danger-custom">No Casing Detected.</span></p>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-warning"></div> Meta Title
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-warning">PASS, but can be improved</span> Title tag is too short, try adding more content
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content mb-3">
                <div class="sub-text-status"><span class="label-bold">Title Tag -</span> <span class="text-muted">How To Disable Chrome Incognito Mode On Windows And Mac</span></div>
            </div>
            <p class="text-status-detail">Length - <span class="text-success-custom">62 characters</span> | Casing - <span class="text-success-custom">Camel Casing</span></p>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Canonical URL
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Your webpage is using a title tag
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content mb-3">
                <div class="sub-text-status mb-2"><span class="label-bold">Actual URL -</span> <span class="text-muted">https://www.setmore.com/premium</span></div>
                <div class="sub-text-status"><span class="label-bold">Canonical URL -</span> <span class="text-muted">https://www.setmore.com/pricing</span></div>
            </div>
            <div class="row">
                <div class="col-md">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="intentional">
                    <label class="form-check-label label-bold" for="intentional">
                    This is intentional
                    </label>
                </div>
                </div>
                <div class="col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                    <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                        <div class="icon-info"></div>
                    </button>  
                    </div>
                    <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-check"></div> Open Graph Image
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-success">PASS.</span> Your webpage is using an <a class="custom-link" href="#" data-bs-toggle="modal" data-bs-target="#confirm_delete_account">Open Graph Image</a>
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-check"></div> Favicon
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-success">PASS.</span> Congratulations! Your website appears to have a favicon.
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Favicon
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Your website does not have a favicon.
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

    </div>

    <!-- End custom card -->

    <div class="card-custom">
        <div class="card-custom-header d-flex align-items-center">
        <h5 class="label-header">Images</h5>
        <div class="flex-grow-1 d-sm-block d-md-none"></div>
        <div class="progress-item d-flex align-items-center">
            <div class="progress progress-rounded progress-images mr-13">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-score">90/100 Scored</div>
        </div>
        </div>

        <!-- Card cutom body -->

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-check"></div> Image Title
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-success">PASS.</span>  All the Images used in the page meet quality requirements
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <ul class="pl-20">
                <li class="list-status">All the images have an Alternate text</li>
                <li class="list-status">All the images have a file size lesser than 150 KB</li>
                <li class="list-status">All the images have a proper file name</li>
            </ul>
            <div class="mb-3">
                <a class="custom-link" href="#" data-bs-toggle="modal" data-bs-target="#image_table">See Details</a>
            </div>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Image Title
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span>  All the Images used in the page meet quality requirements
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <ul class="pl-20">
                <li class="list-status">All the images have an Alternate text</li>
                <li class="list-status">All the images have a file size lesser than 150 KB</li>
                <li class="list-status">All the images have a proper file name</li>
            </ul>
            <div class="row">
                <div class="col-md mb-3">
                <a class="custom-link" href="#" data-bs-toggle="modal" data-bs-target="#image_table">See Details</a>
                </div>
                <div class="col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                    <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                        <div class="icon-info"></div>
                    </button>
                    </div>
                    <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Card custom divider -->
    <div class="card-custom">
        <div class="card-custom-header d-flex align-items-center">
        <h5 class="label-header">Other Checks</h5>
        <div class="flex-grow-1 d-sm-block d-md-none"></div>
        <div class="progress-item d-flex align-items-center">
            <div class="progress progress-rounded progress-other mr-13">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-score">90/100 Scored</div>
        </div>
        </div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-check"></div> Duplicate Content
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-success">PASS.</span> The page does not contain any duplicate content
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <button type="button" class="button-link d-sm-block d-md-none flex-grow-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Duplicate Content
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> The page does not contain any duplicate content
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content text-content mb-3">
                Either your page is using duplicate content or some other domain is using a content which matches with this page. <a href="#" class="custom-link">See Details in Copyscape</a>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
                <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-check"></div> Robots.txt
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-success">PASS.</span> Your website is using a Robots.txt file and the current page is not being blocked by it
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Robots.txt
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Your website is not using a Robots.txt file
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content text-content mb-3">
                While having a Robots.txt file is optional, it is recommended to have a Robots.txt file and control what information is crawled by search engine spiders.
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
                <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> Robots.txt
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Your website is using a Robots.txt file, but the current page is being blocked by it
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content text-content mb-3">
                Given below is the content of your <a href="#" class="custom-link">Robots.txt file</a>. The line highlighted in Red is blocking the current page from search engine spiders
                <div class="custom-code-view mt-3">
                # Allow Googlebot<br>
                User-Agent: Googlebot<br>
                Allow: /<br>
                <span class="text-danger">Disallow: /jsp/</span><br>
                Disallow: /demo<br>
                Disallow: /stageblog/<br>
                # Block Comscore Web Crawler<br>
                User-Agent: proximic<br>
                Disallow: /<br>
                Sitemap: https://www.setmore.com/sitemap.xml
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="intentional_2">
                    <label class="form-check-label" for="intentional_2">
                    This is intentional
                    </label>
                </div>
                </div>
                <div class="col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                    <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                        <div class="icon-info"></div>
                    </button>
                    </div>
                    <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-2">
            <div class="title-content d-flex">
                <div class="icon-x"></div> XML Sitemap
            </div>
            </div>
            <div class="col-md-10">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Your website is using a Robots.txt file, but the current page is being blocked by it
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
                </button>
            </div>
            <div class="custom-card-content text-content mb-3">
                <div class="mb-3">
                We looked into the root directory of your domain, but could not find the XML Sitemap at <a href="#" class="custom-link">https://www.setmore.com/sitemap.xml</a>
                </div>
                <div class="mb-3">
                If your XML Sitemap is in a different location, please add it below.
                </div>
                <div class="mb-3 d-flex align-items-center">
                <span class="mr-10">https://www.setmore.com/</span>
                <input type="text" id="url_plus" name="url_plus" class="input-line mr-10">
                <button class="btn btn-success btn-green">Add</button>
                </div>
                <div class="text-success-custom">XML Sitemap added</div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
                <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->
    </div>

    <!-- Card custom divider -->
    <div class="card-custom">
        <div class="card-custom-header d-flex align-items-center">
        <h5 class="label-header">Performance</h5>
        <div class="flex-grow-1 d-sm-block d-md-none"></div>
        <div class="progress-item d-flex align-items-center">
            <div class="progress progress-rounded progress-other mr-13">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-score">90/100 Scored</div>
        </div>
        </div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-3">
            <div class="title-content d-flex">
                <div class="flex-grow-1">
                <div class="d-flex">
                    <div class="icon-check"></div>
                    <span>Google Page Speed<br>
                    <span class="f-small">(Desktop)</span>
                    </span>
                </div>
                </div>
                <div class="d-sm-block d-md-none">
                <div class="progress-circle-box circle-success" data-value="91">
                    <svg class="small-circle">
                    <circle cx="20" cy="20" r="20"></circle>
                    <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                    <small class="text-center label-bold d-block">91</small>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md">
            <div class="d-flex align-items-center mb-3">
                <div class="title-status flex-grow-1">
                <span class="text-status-success">PASS.</span> Google Page Speed Insights Score for Desktop is <span class="text-success-custom">91%</span>
                </div>
                <div class="d-none d-md-block">
                <div class="progress-circle-box circle-success mr-30" data-value="91">
                    <svg class="small-circle">
                    <circle cx="20" cy="20" r="20"></circle>
                    <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                    <small class="text-center label-bold d-block">91</small>
                    </div>
                </div>
                </div>
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
            </div>
            <div class="mb-3">
                <a href="#" class="custom-link" data-bs-toggle="modal" data-bs-target="#list_css">Check in google insight tool</a>
            </div>
            <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                <div class="icon-info"></div>
            </button>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-3">
            <div class="title-content d-flex">
                <div class="flex-grow-1 d-flex">
                <div class="icon-warning"></div>
                <span>Google Page Speed<br>
                    <span class="f-small">(Desktop)</span>
                </span>
                </div>
                <div class="d-sm-block d-md-none">
                <div class="progress-circle-box circle-warning" data-value="65">
                    <svg class="small-circle">
                    <circle cx="20" cy="20" r="20"></circle>
                    <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                    <small class="text-center label-bold d-block">65</small>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-warning">PASS, but can be improved</span> Google Page Speed Insights Score for Desktop is 65%
                </div>
                <div class="left">
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-3">
                <a href="#" class="custom-link" data-bs-toggle="modal" data-bs-target="#list_css">Check in google insight tool</a>
                </div>
                <div class="col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="d-none d-md-block">
                    <div class="progress-circle-box circle-warning mr-30" data-value="65">
                        <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                        </svg>
                        <div class="progress-description">
                        <small class="text-center label-bold d-block">65</small>
                        </div>
                    </div>
                    </div>
                    <div class="flex-grow-1">
                    <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                        <div class="icon-info"></div>
                    </button>
                    </div>
                    <div>
                    <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-3">
            <div class="title-content d-flex">
                <div class="flex-grow-1 d-flex">
                <div class="icon-x"></div>
                <span>Google Page Speed<br>
                    <span class="f-small">(Desktop)</span>
                </span>
                </div>
                <div class="d-sm-block d-md-none">
                <div class="progress-circle-box circle-danger"data-value="22">
                    <svg class="small-circle">
                    <circle cx="20" cy="20" r="20"></circle>
                    <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                    <small class="text-center label-bold d-block">22</small>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Google Page Speed Insights Score for Desktop is <span class="text-danger-custom">22%</span>
                </div>
                <div class="left">
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-3">
                <a href="#" class="custom-link" data-bs-toggle="modal" data-bs-target="#list_css">Check in google insight tool</a>
                </div>
                <div class="col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="d-none d-md-block">
                    <div class="progress-circle-box circle-danger mr-30" data-value="22">
                        <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                        </svg>
                        <div class="progress-description">
                        <small class="text-center label-bold d-block">22</small>
                        </div>
                    </div>
                    </div>
                    <div class="flex-grow-1">
                    <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                        <div class="icon-info"></div>
                    </button>
                    </div>
                    <div>
                    <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-3">
            <div class="title-content d-flex">
                <div class="icon-x"></div> <span>Core Web Vitals<br><span class="f-small">(Desktop)</span></span>
            </div>
            </div>
            <div class="col-md">
            <div class="d-flex justify-content-between align-items-center mb-28">
                <div class="title-status">
                <span class="text-status-danger">FAIL.</span> Core web vitals is meeting minimum quality requirements
                </div>
                <div class="left">
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
            </div>

            <!-- Progress content -->
            <div class="mb-42 row">
                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">LCP</span>
                    <div class="progress-circle-box circle-danger mr-24" data-value="12">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">10</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-danger-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-x"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">FID</span>
                    <div class="progress-circle-box circle-danger mr-24" data-value="30">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">30</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-danger-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-x"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">CLS</span>
                    <div class="progress-circle-box circle-warning mr-24" data-value="45">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">45</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-warning-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-warning"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">FCP</span>
                    <div class="progress-circle-box circle-warning mr-24" data-value="61">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">61</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-warning-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-warning"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">TBT</span>
                    <div class="progress-circle-box circle-success mr-24" data-value="76">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">76</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-success-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-check"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">TTI</span>
                    <div class="progress-circle-box circle-success mr-24" data-value="80">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">80</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-success-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-check"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">SI</span>
                    <div class="progress-circle-box circle-success mr-24" data-value="93">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">93</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-success-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-check"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-3">
                <a href="#" class="custom-link" data-bs-toggle="modal" data-bs-target="#list_css">Check in google insight tool</a>
                </div>
                <div class="col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                    <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                        <div class="icon-info"></div>
                    </button>
                    </div>
                    <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
                </div>
                
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->

        <div class="custom-divider"></div>

        <!-- Card cutom body -->
        <div class="card-body-content">
        <div class="row">
            <div class="col-md-3">
            <div class="title-content d-flex">
                <div class="icon-check"></div> <span>Lighthouse Audit<br><span class="f-small">(Desktop)</span></span>
            </div>
            </div>
            <div class="col-md">
            <div class="d-flex justify-content-between align-items-center mb-28">
                <div class="title-status">
                <span class="text-status-success">PASS.</span> Lighthouse audit for dekstop is meeting quality reqruirements.
                </div>
                <div class="left">
                <button type="button" class="button-link d-none d-md-block" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
            </div>

            <!-- Progress content -->
            <div class="mb-3 row">
                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">Performance</span>
                    <div class="progress-circle-box circle-success mr-24" data-value="80">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">80</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-success-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-check"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">Accesibility</span>
                    <div class="progress-circle-box circle-success mr-24" data-value="80">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">80</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-success-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-check"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4 have-border">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">Best Practice</span>
                    <div class="progress-circle-box circle-success mr-24" data-value="80">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">80</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-success-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-check"></div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Divider -->

                <div class="col-md-3 mb-4">
                <div class="d-flex align-items-center title mb-3">
                    <span class="label-progress">SEO</span>
                    <div class="progress-circle-box circle-success mr-24" data-value="80">
                    <svg class="small-circle">
                        <circle cx="20" cy="20" r="20"></circle>
                        <circle cx="20" cy="20" r="20"></circle>
                    </svg>
                    <div class="progress-description">
                        <small class="text-center label-bold d-block">80</small>
                    </div>
                    </div>
                </div>
                <div class="d-flex status-progress">
                    <div class="flex-grow-1">
                    <p>Largest contentful paint</p>
                    </div>
                    <div>
                    <div class="text-success-custom d-flex align-items-center">
                        <span class="mr-10">0.2</span> 
                        <div class="icon-check"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row align-items-center mb-3">
                <div class="col-md">
                <div class="mb-3">
                    <a href="#" class="custom-link" data-bs-toggle="modal" data-bs-target="#list_css">Check in google insight tool</a>
                </div>
                </div>
                
                <div class="col-md-auto">
                <div class="score-scale mb-3">Score Scale</div>
                </div>

                <div class="col-md-auto d-flex align-items-center sub-text mb-3">


                <div class="d-flex align-items-center mr-24">
                    <div class="progress progress-rounded progress-score mr-10">
                    <div class="progress-bar bg-danger " role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="score-scale">0-49</span>
                </div>

                <div class="d-flex align-items-center mr-24">
                    <div class="progress progress-rounded progress-score mr-10">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="score-scale">50-89</span>
                </div>

                <div class="d-flex align-items-center">
                    <div class="progress progress-rounded progress-score mr-10">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="score-scale">90-100</span>
                </div>

                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                <button type="button" class="button-link d-sm-block d-md-none" data-bs-toggle="tooltip" data-bs-placement="left" title="Your webpage's meta title is an HTML tag that defines the title of your page. This tag displays your page title in search engine results, at the top of a user's browser, and also when your page is bookmarked in a list of favorites. A concise, descriptive title tag that accurately reflects your page's topic is important for ranking well in search engines.">
                    <div class="icon-info"></div>
                </button>
                </div>
                <button class="btn btn-danger btn-red" data-bs-toggle="modal" data-bs-target="#static_backdrop">How to fix it?</button>
            </div>
            </div>
        </div>
        </div>

        <!-- End card custom body -->
    </div>

    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="static_backdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="static_backdrop_label" aria-hidden="true">
<div class="modal-dialog modal-lg" style="max-width: 717px;">
<div class="modal-content modal-custom">
<div class="modal-header modal-header-confirm">
    <p class="modal-title">Title Tag Test</p>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body modal-body-video">
    <div align="center">
    <iframe class="w-100 h-video" src="https://www.youtube.com/embed/6iO3TSOC0ko" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>  
    </div>
    <h5 class="text-video">How to pass this test?</h5>
    
    <li class="li-video">All the images have an Alternate text</li>
    <li class="li-video">All the images have a file size lesser than 150 KB</li>
    <li class="li-video">All the images have a proper file name</li>
    
    <div class="description-video">The above rules can be customized from the settings page of the project, where you can define the conditions for PASS and FAIL.</div>
    <div class="lern-more"><a href="#" class="custom-link">Learn more</a> on how to create optimized title tags for SEO</div>
</div>
<div class="modal-footer modal-footer-video">
    <button type="button" class="btn btn-grey" data-bs-dismiss="modal">Not sure about this</button>
    <button type="button" class="btn btn-orange">Confirm</button>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="image_table" data-bs-keyboard="false" tabindex="-1" aria-labelledby="static_backdrop_label" aria-hidden="true">
<div class="modal-dialog modal-xl  modal-dialog-scrollable">
<div class="modal-content modal-custom">
<div class="modal-header modal-header-image">
    <p class="modal-title">Image Table</p>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="row p-image">
    <div class="col-md">
    <div class="text-image">The following images are not meeting quality requirements</div>
    </div>
    <div class="col-md-auto">
    <div class="form-check">
        <input class="form-check-input" name="hide_item" type="checkbox" value="" id="hide_item2">
        <label class="check-label-image" for="hide_item2">
        Hide Item Passed
        </label>
    </div>
    </div>
</div>
<div class="modal-body modal-body-image">
    
    <table class="table table-image">
    <thead class="thead-image">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Image Link</th>
        <th scope="col">Alternate Text</th>
        <th scope="col">File Size</th>
        <th scope="col">File Name</th>
        <th scope="col">Status</th>
        <th scope="col">Issues</th>
        </tr>
    </thead>
    <tbody class="tbody-image">
        <tr>
        <td>1.</td>
        <td><a class="custom-link" href="#">Image link</a></td>
        <td><span class="text-success">This is the Alt Text of the image</span></td>
        <td><span class="text-success">120 KB</span></td>
        <td><span class="text-success">butterfly_garden.png</span></td>
        <td><div class="badge custom-badge-success">PASS</div></td>
        <td>Words in image file name is not separated by hyphens.</td>
        </tr>
        <tr>
        <td>2.</td>
        <td><a class="custom-link" href="#">Image link</a></td>
        <td><span class="text-success">This is the Alt Text of the image</span></td>
        <td><span class="text-success">120 KB</span></td>
        <td><span class="text-success">butterfly_garden.png</span></td>
        <td><div class="badge custom-badge-success">PASS</div></td>
        <td>Words in image file name is not separated by hyphens.</td>
        </tr>
        <tr>
        <td>3.</td>
        <td><a class="custom-link" href="#">Image link</a></td>
        <td><span class="text-danger">This is the Alt Text of the image</span></td>
        <td><span class="text-success">120 KB</span></td>
        <td><span class="text-success">butterfly_garden.png</span></td>
        <td><div class="badge custom-badge-danger">FAIL</div></td>
        <td>Words in image file name is not separated by hyphens.</td>
        </tr>
        <tr>
        <td>4.</td>
        <td><a class="custom-link" href="#">Image link</a></td>
        <td><span class="text-danger">This is the Alt Text of the image</span></td>
        <td><span class="text-danger">120 KB</span></td>
        <td><span class="text-success">butterfly_garden.png</span></td>
        <td><div class="badge custom-badge-danger">FAIL</div></td>
        <td>Words in image file name is not separated by hyphens.</td>
        </tr>
        <tr>
        <td>5.</td>
        <td><a class="custom-link" href="#">Image link</a></td>
        <td><span class="text-danger">This is the Alt Text of the image</span></td>
        <td><span class="text-danger">120 KB</span></td>
        <td><span class="text-danger">butterfly_garden.png</span></td>
        <td><div class="badge custom-badge-danger">FAIL</div></td>
        <td>Words in image file name is not separated by hyphens.</td>
        </tr>
        <tr>
        <td>6.</td>
        <td><a class="custom-link" href="#">Image link</a></td>
        <td><span class="text-success">This is the Alt Text of the image</span></td>
        <td><span class="text-danger">120 KB</span></td>
        <td><span class="text-danger">butterfly_garden.png</span></td>
        <td><div class="badge custom-badge-danger">FAIL</div></td>
        <td>
            <ul class="list-image">
            <li>All the images have an Alternate text</li>
            <li>All the images have a file size lesser than 150 KB</li>
            <li>All the images have a proper file name</li>
            </ul>
        </td>
        </tr>
    </tbody>
    </table>
</div>
<div class="modal-footer">
    <a class="custom-link d-inline-flex align-items-center mr-30" href="#"><div class="excel-icon"></div><span class="text-download">Download CSV</span></a>
    
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="scoring_scale" tabindex="-1" aria-labelledby="example_modal_label" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="example_modal_label">Scoring Scale Of Core Web Vitals</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body no-padding">
    
    <div class="row item-row">
    <div class="col-md-6">
        <p class="item-title">LCP</p>
        <p class="item-detail">Largest Contentful Paint: measures loading performance. To provide a good user experience, LCP should occur within 2.5 seconds of when the page first starts loading.</p>
    </div>
    <div class="col"></div>
    <div class="col-auto w-rate">
        <div class="card card-rate">
        <div class="card-body card-body-rate">
            <div class="row text-center">
            <div class="col rate-good">
                <p>Good</p>
            </div>
            <div class="col rate-improvement">
                <p class="my-8">Need Improvement</p>
            </div>
            <div class="col rate-poor">
                <p>Poor</p>
            </div>
            </div>
        </div>
        </div> 
        <div class="row justify-content-evenly">
        <div class="col-auto pl-12">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        <div class="col-auto pl-16">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        </div>
        <div class="row justify-content-evenly g-0">
        <div class="col-auto">
            <p class="text-rete">2.5 sec</p>
        </div>
        <div class="col-auto">
            <p class="text-rete">4.0 sec</p>
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    
    <div class="row item-row">
    <div class="col-md-6">
        <p class="item-title">FCP</p>
        <p class="item-detail">Largest Contentful Paint: measures loading performance. To provide a good user experience, LCP should occur within 2.5 seconds of when the page first starts loading.</p>
    </div>
    <div class="col"></div>
    <div class="col-auto w-rate">
        <div class="card card-rate">
        <div class="card-body card-body-rate">
            <div class="row text-center">
            <div class="col rate-good">
                <p>Good</p>
            </div>
            <div class="col rate-improvement">
                <p class="my-8">Need Improvement</p>
            </div>
            <div class="col rate-poor">
                <p>Poor</p>
            </div>
            </div>
        </div>
        </div> 
        <div class="row justify-content-evenly">
        <div class="col-auto pl-12">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        <div class="col-auto pl-16">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        </div>
        <div class="row justify-content-evenly g-0">
        <div class="col-auto">
            <p class="text-rete">2.5 sec</p>
        </div>
        <div class="col-auto">
            <p class="text-rete">4.0 sec</p>
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    
    <div class="row item-row">
    <div class="col-md-6">
        <p class="item-title">FID</p>
        <p class="item-detail">Largest Contentful Paint: measures loading performance. To provide a good user experience, LCP should occur within 2.5 seconds of when the page first starts loading.</p>
    </div>
    <div class="col"></div>
    <div class="col-auto w-rate">
        <div class="card card-rate">
        <div class="card-body card-body-rate">
            <div class="row text-center">
            <div class="col rate-good">
                <p>Good</p>
            </div>
            <div class="col rate-improvement">
                <p class="my-8">Need Improvement</p>
            </div>
            <div class="col rate-poor">
                <p>Poor</p>
            </div>
            </div>
        </div>
        </div> 
        <div class="row justify-content-evenly">
        <div class="col-auto pl-12">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        <div class="col-auto pl-16">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        </div>
        <div class="row justify-content-evenly g-0">
        <div class="col-auto">
            <p class="text-rete">2.5 sec</p>
        </div>
        <div class="col-auto">
            <p class="text-rete">4.0 sec</p>
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    
    <div class="row item-row">
    <div class="col-md-6">
        <p class="item-title">CLS</p>
        <p class="item-detail">Largest Contentful Paint: measures loading performance. To provide a good user experience, LCP should occur within 2.5 seconds of when the page first starts loading.</p>
    </div>
    <div class="col"></div>
    <div class="col-auto w-rate">
        <div class="card card-rate">
        <div class="card-body card-body-rate">
            <div class="row text-center">
            <div class="col rate-good">
                <p>Good</p>
            </div>
            <div class="col rate-improvement">
                <p class="my-8">Need Improvement</p>
            </div>
            <div class="col rate-poor">
                <p>Poor</p>
            </div>
            </div>
        </div>
        </div> 
        <div class="row justify-content-evenly">
        <div class="col-auto pl-12">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        <div class="col-auto pl-16">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        </div>
        <div class="row justify-content-evenly g-0">
        <div class="col-auto">
            <p class="text-rete">2.5 sec</p>
        </div>
        <div class="col-auto">
            <p class="text-rete">4.0 sec</p>
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    
    <div class="row item-row">
    <div class="col-md-6">
        <p class="item-title">CLS</p>
        <p class="item-detail">Largest Contentful Paint: measures loading performance. To provide a good user experience, LCP should occur within 2.5 seconds of when the page first starts loading.</p>
    </div>
    <div class="col"></div>
    <div class="col-auto w-rate">
        <div class="card card-rate">
        <div class="card-body card-body-rate">
            <div class="row text-center">
            <div class="col rate-good">
                <p>Good</p>
            </div>
            <div class="col rate-improvement">
                <p class="my-8">Need Improvement</p>
            </div>
            <div class="col rate-poor">
                <p>Poor</p>
            </div>
            </div>
        </div>
        </div> 
        <div class="row justify-content-evenly">
        <div class="col-auto pl-12">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        <div class="col-auto pl-16">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        </div>
        <div class="row justify-content-evenly g-0">
        <div class="col-auto">
            <p class="text-rete">2.5 sec</p>
        </div>
        <div class="col-auto">
            <p class="text-rete">4.0 sec</p>
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    
    <div class="row item-row">
    <div class="col-md-6">
        <p class="item-title">CLS</p>
        <p class="item-detail">Largest Contentful Paint: measures loading performance. To provide a good user experience, LCP should occur within 2.5 seconds of when the page first starts loading.</p>
    </div>
    <div class="col"></div>
    <div class="col-auto w-rate">
        <div class="card card-rate">
        <div class="card-body card-body-rate">
            <div class="row text-center">
            <div class="col rate-good">
                <p>Good</p>
            </div>
            <div class="col rate-improvement">
                <p class="my-8">Need Improvement</p>
            </div>
            <div class="col rate-poor">
                <p>Poor</p>
            </div>
            </div>
        </div>
        </div> 
        <div class="row justify-content-evenly">
        <div class="col-auto pl-12">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        <div class="col-auto pl-16">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        </div>
        <div class="row justify-content-evenly g-0">
        <div class="col-auto">
            <p class="text-rete">2.5 sec</p>
        </div>
        <div class="col-auto">
            <p class="text-rete">4.0 sec</p>
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    
    <div class="row item-row">
    <div class="col-md-6">
        <p class="item-title">FCP</p>
        <p class="item-detail">Largest Contentful Paint: measures loading performance. To provide a good user experience, LCP should occur within 2.5 seconds of when the page first starts loading.</p>
    </div>
    <div class="col"></div>
    <div class="col-auto w-rate">
        <div class="card card-rate">
        <div class="card-body card-body-rate">
            <div class="row text-center">
            <div class="col rate-good">
                <p>Good</p>
            </div>
            <div class="col rate-improvement">
                <p class="my-8">Need Improvement</p>
            </div>
            <div class="col rate-poor">
                <p>Poor</p>
            </div>
            </div>
        </div>
        </div> 
        <div class="row justify-content-evenly">
        <div class="col-auto pl-12">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        <div class="col-auto pl-16">
            <img src="{{ asset('images/line.png') }}" class="line-rate">
        </div>
        </div>
        <div class="row justify-content-evenly g-0">
        <div class="col-auto">
            <p class="text-rete">2.5 sec</p>
        </div>
        <div class="col-auto">
            <p class="text-rete">4.0 sec</p>
        </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    
</div>
<div class="modal-footer h-4">
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="list_css" tabindex="-1" aria-labelledby="list_css_label" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="list_css_label">List of CSS resources</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="mb-40">
    <p class="title-uncompressed">Uncompressed and unminified CSS Resources</p>
    <p class="detail-list">The following CSS resources aren???t compressed or minified</p>
    <ul class="pl-20">
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
    </ul>
    
    </div>
    <div class="mb-40">
    <p class="title-compressed">Compressed and Minified CSS Resources</p>
    <p class="detail-list">The following CSS resources aren???t compressed or minified</p>
    <ul class="pl-20">
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
        <li>
        <a href="#" class="custom-link">
            <p class="list-link">http://www.example.com/whatever/url/there.html</p>
        </a>
        </li>
    </ul>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirm_delete_account" tabindex="-1" aria-labelledby="confirm_delete_accountLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header modal-header-confirm">
        <p class="modal-title">Confirm Delete Account</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-body-confirm">
        <p>So you are saying, you have intentionally blocked this page -<br>
        <strong>https://www.setmore.com/premium</strong> from being crawled by Google and other search engines.</p>

        <p>What this means is Google and other search engines will not be able to crawl this page and it will not be shown in search results.</p>
      </div>
      <div class="modal-footer modal-footer-confirm">
        <button type="button" class="btn btn-grey" data-bs-dismiss="modal">Ignore</button>
        <button type="button" class="btn btn-orange">Confirm</button>
      </div>
    </div>
  </div>
</div>

@endsection