@extends('layouts.master')

@section('content')
<form>
    <table class="table table-hover table-lunches tablesorter">
        <thead>
            <tr>
                <th>Lunch</th>
                <th data-sorter="shortDate">Date</th>
                <th>Rating</th>
                <th><i class="icon-male"></i></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">Pizza</a></td>
                <td>20 Jan 2013</td>
                <td>5</td>
                <td>18</td>
            </tr>
            <tr>
                <td><a href="#">Burrito</a></td>
                <td>27 Jan 2013</td>
                <td>5</td>
                <td>49</td>
            </tr>
            <tr>
                <td><a href="#">Thai</a></td>
                <td>3 Feb 2013</td>
                <td>5</td>
                <td>89</td>
            </tr>
        </tbody>
    </table>

    <div class="pagination">
        <ul>
            <li><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
</form>
@stop