<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <table style="border-style: dotted; width:100%;">
                                                <tr>
                                                    <td align="right"> Email <br>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right"> Password <br>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="center">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
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
                                            <td>
                                                <h2 align="center"> [Welcome to Thefacebook] </h2>
                                                <p> Thefacebook is an online directory that connects people through social networks at colleges.</p>

                                                <p> We have opened up Thefacebook for popular consumption at <b> Harvard University. </b></p>

                                                <p> You can use Thefacebook to:</p>

                                                <ul>
                                                    <li>
                                                        Search for people at your school
                                                    </li>

                                                    <li>
                                                        Find out who are in your classes
                                                    </li>

                                                    <li>
                                                        Look up your friends' friends
                                                    </li>

                                                    <li>
                                                        See a visualization of your social network.
                                                    </li>
                                                </ul>

                                                <p> To get started, click below to register. If you have already registered, you can log in.</p>
                                               
                                               
                                                <a href="{{ route('login') }}">
                    <button class="btn btn-sm btn-secondary"style="background-color:blue"> Login</button>
                </a>
                
                <a href="{{ route('register') }}">
                    <button class="btn btn-sm btn-secondary"style="background-color:blue">Register</button>
                </a>
                                              
                                            </td>

                                            <tr>
                                                <td align="center">
                                                    <a href=index.html> about contact faq terms privacy</a>
                                                    <br> a Mark Zuckerberg production
                                                    <br> Thefacebook 2004
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>