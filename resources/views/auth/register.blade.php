<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <table align="center">
        <tr>
            <td>
                <table border="2">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td colspan="3"> <img width="100%" height="150" src="https://markzone.az/wp-content/uploads/2020/09/Facebook.jpg"> </td>
                                </tr>
                                <tr>
                                    <td width="50">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <table style="border-style: dotted; width:100%;">
                                                <tr>
                                                    <td align="right"> Name <br>
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right"> Email <br>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right"> Password <br>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right"> Confirm Password <br>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </td>
                                    <td>
                                        <table border="1" width="100%">
                                            <tr>
                                                <td bgcolor="blue" align="center"> Welcome to Thefacebook! </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 align="center"> [Welcome to Thefacebook] </h2>
                                                    <p> Thefacebook is an online directory that connects people through social networks at colleges.</p>
                                                    <p> We have opened up Thefacebook for popular consumption at <b> Harvard University. </b></p>
                                                    <p> You can use The
