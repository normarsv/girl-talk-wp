<?php

if (isset($_REQUEST['login']) && isset($_REQUEST['key'])) {
    echo view('forgot-pass-reset-form');
} else {
    echo view('forgot-pass');
}