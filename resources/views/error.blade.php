<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/2/18
 * Time: 10:06 AM
 */
?>
@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
