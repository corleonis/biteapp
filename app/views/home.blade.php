@extends('layouts.master')

@section('content')

    <div class="jumbotron">
        <?php $quote = json_decode(file_get_contents('http://bite.dev/quotes')); ?>
        <h1><?php echo $quote->author; ?></h1>
        <p class="lead"><?php echo $quote->quote; ?></p>
        <a class="btn btn-large btn-success" href="."><i class="icon-refresh"></i></a>
    </div>

    <hr>

    <div class="row-fluid lunch-box">
        <div class="span12">
            <h2><a href=""#">Best Friday lunch ever!</a></h2>

            <strong>Date:</strong> <span class="lunch-date">20 Aug 2013</span>

            <div class="row-fluid">
                <div class="span6">
                    <h3>Pick food</h3>
                    <label class="radio">
                      <input type="radio" name="itemsRadios" id="itemsRadios1" value="1" checked>
                      Pizza
                    </label>
                    <label class="radio">
                      <input type="radio" name="itemsRadios" id="itemsRadios2" value="2">
                        Burrito
                    </label>
                    <label class="radio">
                      <input type="radio" name="itemsRadios" id="itemsRadios3" value="3">
                        Thai
                    </label>
                </div>

                <div class="span6">
                    <h3>Extras</h3>
                    <label class="radio">
                      <input type="radio" name="extrasRadios" id="extraRadios1" value="1" checked>
                      Salad
                    </label>
                    <label class="radio">
                      <input type="radio" name="extrasRadios" id="extraRadios2" value="2">
                        Wrap
                    </label>
                    <label class="radio">
                      <input type="radio" name="extrasRadios" id="extraRadios3" value="3">
                        Rice
                    </label>
                </div>

                <div class="row-fluid ">
                    <div class="span12">
                        <input type="text" name="name" id="name" class="pull-left" placeholder="Name" />
                        <input type="email" name="email" id="email" class="pull-left" placeholder="Email" />
                        <button type="submit" class="btn pull-right">
                            <i class="icon-food"></i> Munch it!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop