/* ***** BEGIN LICENSE BLOCK *****
 * Distributed under the BSD license:
 *
 * Copyright (c) 2010, Ajax.org B.V.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of Ajax.org B.V. nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL AJAX.ORG B.V. BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * ***** END LICENSE BLOCK ***** */

ace.define('ace/theme/senicity', ['require', 'exports', 'module' , 'ace/lib/dom'], function(require, exports, module) {

exports.isDark = true;
exports.cssClass = "ace-senicity";
exports.cssText = ".ace-senicity .ace_gutter {\
background: #25282c;\
color: #C5C8C6\
}\
.ace-senicity .ace_print-margin {\
width: 1px;\
background: #25282c\
}\
.ace-senicity  {\
background-color: #1D1F21;\
color: #C5C8C6;\
background:transparent;\
}\
.ace-senicity .ace_cursor {\
color: #AEAFAD\
}\
.ace-senicity .ace_marker-layer .ace_selection {\
background: #373B41\
}\
.ace-senicity.ace_multiselect .ace_selection.ace_start {\
box-shadow: 0 0 3px 0px #1D1F21;\
border-radius: 2px\
}\
.ace-senicity .ace_marker-layer .ace_step {\
background: rgb(102, 82, 0)\
}\
.ace-senicity .ace_marker-layer .ace_bracket {\
margin: -1px 0 0 -1px;\
border: 1px solid #4B4E55\
}\
.ace-senicity .ace_marker-layer .ace_active-line {\
background: #282A2E\
}\
.ace-senicity .ace_gutter-active-line {\
background-color: #282A2E\
}\
.ace-senicity .ace_marker-layer .ace_selected-word {\
border: 1px solid #373B41\
}\
.ace-senicity .ace_invisible {\
color: #4B4E55\
}\
.ace-senicity .ace_keyword,\
.ace-senicity .ace_meta,\
.ace-senicity .ace_storage,\
.ace-senicity .ace_storage.ace_type,\
.ace-senicity .ace_support.ace_type {\
color: #B294BB\
}\
.ace-senicity .ace_keyword.ace_operator {\
color: #8ABEB7\
}\
.ace-senicity .ace_constant.ace_character,\
.ace-senicity .ace_constant.ace_language,\
.ace-senicity .ace_constant.ace_numeric,\
.ace-senicity .ace_keyword.ace_other.ace_unit,\
.ace-senicity .ace_support.ace_constant,\
.ace-senicity .ace_variable.ace_parameter {\
color: #DE935F\
}\
.ace-senicity .ace_constant.ace_other {\
color: #CED1CF\
}\
.ace-senicity .ace_invalid {\
color: #CED2CF;\
background-color: #DF5F5F\
}\
.ace-senicity .ace_invalid.ace_deprecated {\
color: #CED2CF;\
background-color: #B798BF\
}\
.ace-senicity .ace_fold {\
background-color: #81A2BE;\
border-color: #C5C8C6\
}\
.ace-senicity .ace_entity.ace_name.ace_function,\
.ace-senicity .ace_support.ace_function,\
.ace-senicity .ace_variable {\
color: #81A2BE\
}\
.ace-senicity .ace_support.ace_class,\
.ace-senicity .ace_support.ace_type {\
color: #F0C674\
}\
.ace-senicity .ace_heading,\
.ace-senicity .ace_string {\
color: #B5BD68\
}\
.ace-senicity .ace_entity.ace_name.ace_tag,\
.ace-senicity .ace_entity.ace_other.ace_attribute-name,\
.ace-senicity .ace_meta.ace_tag,\
.ace-senicity .ace_string.ace_regexp,\
.ace-senicity .ace_variable {\
color: #CC6666\
}\
.ace-senicity .ace_comment {\
color: #969896\
}\
.ace-senicity .ace_indent-guide {\
background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAEklEQVQImWNgYGBgYHB3d/8PAAOIAdULw8qMAAAAAElFTkSuQmCC) right repeat-y;\
}";



});

