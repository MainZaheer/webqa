@extends('layouts.app')
@section("content")


<!-- content -->
<div class="content-inner">
    <div class="content-inner-header">
        <div class="row">
            <div class="col">
            <h2 class="content-title">Settings</h2>
            </div>
            <div class="col-auto">
            <button type="button" class="btn btn-orange">Discard Changes</button>                
            <button type="button" class="btn btn-custom">Save settings</button>                
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-3">
        <div class="card-list">
            <a href="setting.html">
                <button type="button" class="list-item active text-start">Meta tags</button>
            </a>
            <a href="setting_images.html">
                <button type="button" class="list-item text-start">Images</button>
            </a>
            <a href="#">
                <button type="button" class="list-item text-start">Other Check</button>
            </a>
            <a href="#">
                <button type="button" class="list-item text-start">Performance</button>
            </a>
        </div>
    </div>
    <div class="col-md">
        <div class="card-collapse">
        <div class="accordion-custom-wrapper">

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Meta title</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main" class="accordion-main d-none" id="accordion_main">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have a meta title tag</label>
                    </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Maximum length of Title tag should be <input type="number" class="text-line" /> characters</label>
                
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                <label class="form-check-label" for="flex_check_default2">Minimum length of Title tag should be <input type="number" class="text-line" /> Characters</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default3">
                <label class="form-check-label" for="flex_check_default3">Title Tag must not be equal to H1 heading tag</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default4">
                <label class="form-check-label" for="flex_check_default4">Title Tag must be either in camel casing or sentence casing</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default5">
                <label class="form-check-label" for="flex_check_default5">Title Tag must be in camel casing</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default6">
                <label class="form-check-label" for="flex_check_default6">Title Tag must be in sentence casing</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default6">
                <label class="form-check-label" for="flex_check_default6">Disable all casing checks</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default7">
                <label class="form-check-label" for="flex_check_default7">Exclude specific words from casing checks (separate each word with a comma)</label>
                <textarea class="form-control textarea-custom" id="example_form_control_textarea" rows="3"></textarea>
                </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Meta Description</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main1">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main1" class="accordion-main d-none" id="accordion_main1">
            <div class="panel">
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have a meta description tag</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Maximum length of Meta Descripiton should be <input type="number" class="text-line" /> Characters</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Minimum length of Meta Descripiton should be <input type="number" class="text-line" /> Characters</label>
                    </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Robots Meta Tag</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main2">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main2" class="accordion-main d-none" id="accordion_main2">
            <div class="panel">
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Staging URLs Must have Robots meta tag (noindex,nofollow)</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Live URLs Must Not have Robots meta tag (noindex,nofollow), Unless intentionally added on a case by case basis</label>
                    </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Canonical URL</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main3">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main3" class="accordion-main d-none" id="accordion_main3">
            <div class="panel">
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have a canonical URL tag</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Canonical URL must be equal to the actual URL (self canonicalise)</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Ignore the Trailing Slash in Canonical URL</label>
                    </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>URL Slug</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main4">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main5" class="accordion-main d-none" id="accordion_main4">
            <div class="panel">
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every character in the URL needs to be lowercase</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">URLs cannot contain numbers</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">URLs cannot contain special characters</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Maximum length of a URL  should be <input type="number" class="text-line" /> Characters (excluding the domain name)</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Words in URLs should be separated by Hyphens only</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Words in URLs should be separated by Underscores only</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Words in URLs can be separated by either Hyphens or underscores</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default7">
                    <label class="form-check-label" for="flex_check_default7">URLs must not contain specific stop words</label>
                    <textarea class="form-control textarea-custom" id="example_form_control_textarea" rows="3"></textarea>
                    </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Open Graph Title</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main5">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main5" class="accordion-main d-none" id="accordion_main5">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have an Open Graph Title tag</label>
                    </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Maximum length of OG Title  should be <input type="number" class="text-line" /> characters</label>
                
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                <label class="form-check-label" for="flex_check_default2">Minimum length of OG Title  should be <input type="number" class="text-line" /> Characters</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                <label class="form-check-label" for="flex_check_default2">OG Title must be in Camel casing</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                <label class="form-check-label" for="flex_check_default2">OG Title must be in sentence casing</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                <label class="form-check-label" for="flex_check_default2">OG Title can be either in camel casing or in sentence casing</label>
                </div>
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">OG Title must be equal to the Title Tag</label>
                    </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Open Graph Description</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main6">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main6" class="accordion-main d-none" id="accordion_main6">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have an Open Graph description tag</label>
                    </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Maximum length of OG Description should be <input type="number" class="text-line" /> characters</label>
                
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Minimum length of OG Description should be <input type="number" class="text-line" /> characters</label>
                </div>
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">OG Description must be the same as Meta description</label>
                    </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Open Graph Image</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main7">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main7" class="accordion-main d-none" id="accordion_main7">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have an Open Graph image</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Width of OG Image should be at least <input type="number" class="text-line" /> pixels and height of OG Image should be at least<input type="number" class="text-line" /> pixels</label>   
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Width of OG Image should be exactly <input type="number" class="text-line" /> pixels and height of OG Image should be exactly<input type="number" class="text-line" /> pixels</label>   
                </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Open Graph URL</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main8">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main8" class="accordion-main d-none" id="accordion_main8">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have an Open Graph URL</label>
                </div>
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Open Graph URL must be equal to the actual URL</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Maximum length of OG URL should be <input type="number" class="text-line" /> characters</label>
                </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Twitter Title</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main9">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main9" class="accordion-main d-none" id="accordion_main9">
            <div class="panel">
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have a Twitter Title Tag</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                    <label class="form-check-label" for="flex_check_default1">Maximum length of Twitter Title should be <input type="number" class="text-line" /> characters</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                    <label class="form-check-label" for="flex_check_default1">Minimum length of Twitter Title should be <input type="number" class="text-line" /> characters</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                    <label class="form-check-label" for="flex_check_default1">Twitter Title Must be in Camel Casing</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                    <label class="form-check-label" for="flex_check_default1">Twitter Title Must be in Sentence Casing</label>
                    </div>
                    
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                    <label class="form-check-label" for="flex_check_default1">Twitter Title Can be Either in Camel Casing or Sentence Casing</label>
                    </div>
                    <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                    <label class="form-check-label" for="flex_check_default1">Twitter Title Must be Equal to Title Tag</label>
                    </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Twitter Image</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main10">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main10" class="accordion-main d-none" id="accordion_main10">
            <div class="panel">
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Every page must have a Twitter Image</label>   
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Width of Twitter Image should be at least <input type="number" class="text-line" /> pixels and height of Twitter Image should be at least<input type="number" class="text-line" /> pixels</label>   
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Width of Twitter Image should be exactly <input type="number" class="text-line" /> pixels and height of Twitter Image should be exactly<input type="number" class="text-line" /> pixels</label>   
                </div>
            </div>
            </div>
            
            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Twitter Image Alt</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main11">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main11" class="accordion-main d-none" id="accordion_main11">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have a Twitter Image ALT Tag</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Maximum length of Twitter Image ALT should be <input type="number" class="text-line" /> characters</label>   
                </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>Favicon</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main11">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main11" class="accordion-main d-none" id="accordion_main11">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default2">
                    <label class="form-check-label" for="flex_check_default2">Every page must have a Favicon</label>
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Width of Favicon should be at least<input type="number" class="text-line" /> pixels and height of favicon should be at least <input type="number" class="text-line" /> pixels</label>   
                </div>
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default1">
                <label class="form-check-label" for="flex_check_default1">Width of Favicon should be exactly<input type="number" class="text-line" /> pixels and height of favicon should be exactly <input type="number" class="text-line" /> pixels</label>   
                </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>XML sitemap</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main12">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main12" class="accordion-main d-none" id="accordion_main12">
            <div class="panel">
                <div class="form-check check-custom">
                <input class="form-check-input" type="checkbox" value="" id="flex_check_default8">
                <label class="form-check-label" for="flex_check_default8">Every page must be added to XML sitemap</label>
                <div class="row mb-3">
                    <label for="example_form_control_input1" class="col-sm-auto col-form-label">Address of the XML Sitemap File</label>
                    <div class="col-sm">
                    <input type="txt" class="form-control" id="example_form_control_input1" placeholder="https://www.setmore.com/sitemap.xml">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                </div>
            </div>
            </div>

            <div class="wrap">
            <div class="accordion-custom d-flex justify-content-between align-items-center">
                <span><b>HTML sitemap</b></span>
                <div class="d-flex align-items-center">
                <div class="switch-group mr-16">
                    <label class="switch">
                    <input type="checkbox" class="switch-custom" checked id="switch_1" name="switch_1">
                    <span class="slider"></span>
                    </label>
                    <label for="switch_1">ON</label>
                </div>
                <label class="accordion-button-custom2" for="accordion_main13">
                    <div class="chevron-icon"></div>
                </label>
                </div>
            </div>
            <input type="checkbox" name="accordion_main13" class="accordion-main d-none" id="accordion_main13">
            <div class="panel">
                <div class="form-check check-custom">
                    <input class="form-check-input" type="checkbox" value="" id="flex_check_default9">
                    <label class="form-check-label" for="flex_check_default9">Every page must be added to HTML sitemap</label>
                    <div class="row mb-3">
                    <label for="example_form_control_input2" class="col-sm-auto col-form-label">Address of the HTML Sitemap File</label>
                    <div class="col-sm">
                        <input type="txt" class="form-control" id="example_form_control_input2" placeholder="https://www.setmore.com/sitemap">
                    </div>
                    <div class="col-sm-2"></div>
                    </div>
                </div>
                </div>
            </div>

        </div>
        </div>
        <div style="margin-top:40px;margin-bottom:20px;font-weight:bold;">
            <a class="custom-link" href="#">Reset everything to default settings</a>
        </div>
        </div>
    </div>
</div>


@endsection
