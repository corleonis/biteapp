@extends('layouts.master')

@section('content')
<form>
    <div class="row-fluid">
        <div class="span12">
            <h3>Lunch details</h3>

            <input type="text" name="title" placeholder="Name it" />
            <input type="url" name="link" placeholder="Link it" />
            <input type="date" name="date" placeholder="Date" />

            <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font">
                        <i class="icon-font"></i>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                    </ul>
                </div>
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size">
                        <i class="icon-text-height"></i>&nbsp;<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                        <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                        <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)">
                        <i class="icon-underline"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a class="btn" data-edit="insertunorderedlist" title="Bullet list">
                        <i class="icon-list-ul"></i>
                    </a>
                    <a class="btn" data-edit="insertorderedlist" title="Number list">
                        <i class="icon-list-ol"></i>
                    </a>
                    <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)">
                        <i class="icon-indent-left"></i>
                    </a>
                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                </div>
                <div class="btn-group">
                    <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)">
                        <i class="icon-align-left"></i>
                    </a>
                    <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)">
                        <i class="icon-align-center"></i>
                    </a>
                    <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)">
                        <i class="icon-align-right"></i>
                    </a>
                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)">
                        <i class="icon-align-justify"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink">
                        <i class="icon-link"></i>
                    </a>

                    <div class="dropdown-menu input-append">
                        <input class="" placeholder="URL" type="text" data-edit="createLink"/>
                        <button class="btn" type="button">Add</button>
                    </div>
                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

                </div>

                <div class="btn-group">
                    <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn">
                        <i class="icon-picture"></i>
                    </a>
                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage"/>
                </div>
            </div>
            <div id="editor">And the lunch for today is ...</div>
        </div>
    </div>

    <div class="row-fluid">
        <h3>Menu items</h3>

        <div class="span8">
            <input type="text" name="menu_items[]" placeholder="This is pizza :)" />
        </div>
        <div class="span3">
            <a class="btn"><i class="icon-plus-sign"></i></a>
        </div>
    </div>

    <div class="row-fluid">
        <h3>Extras</h3>

        <div class="span8">
            <input type="text" name="menu_items[]" placeholder="With extra cheese, nom nom!" />
        </div>
        <div class="span3">
            <a class="btn"><i class="icon-plus-sign"></i></a>
        </div>
    </div>

    <div class="row-fluid">
        <button type="submit" class="btn pull-right">
            <i class="icon-food"></i> Munch it!
        </button>
    </div>
</form>
@stop