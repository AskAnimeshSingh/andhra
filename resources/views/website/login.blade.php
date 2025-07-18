<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andhra Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: url("{{ asset('assets/website/indexImages/andhrabg.jpg') }}") center center / cover no-repeat fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(
                circle at 25% 25%,
                rgba(226, 91, 32, 0.05) 0%,
                transparent 25%
            ),
            radial-gradient(
                circle at 75% 75%,
                rgba(226, 91, 32, 0.03) 0%,
                transparent 25%
            ),
            radial-gradient(
                circle at 75% 25%,
                rgba(45, 55, 72, 0.02) 0%,
                transparent 25%
            ),
            radial-gradient(
                circle at 25% 75%,
                rgba(45, 55, 72, 0.02) 0%,
                transparent 25%
            );
            background-size: 300px 300px, 250px 250px, 200px 200px, 350px 350px;
            background-position: 0 0, 50px 50px, 100px 100px, 150px 150px;
            z-index: -1;
            opacity: 0.3;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(226, 91, 32, 0.25),
                0 20px 25px -5px rgba(226, 91, 32, 0.15),
                0 10px 10px -5px rgba(226, 91, 32, 0.08),
                0 4px 6px -2px rgba(0, 0, 0, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 420px;
            padding: 40px 30px;
            text-align: center;
            border: 1px solid rgba(226, 91, 32, 0.1);
            position: relative;
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-3px);
            box-shadow: 0 35px 70px -12px rgba(226, 91, 32, 0.35),
                0 28px 35px -5px rgba(226, 91, 32, 0.25),
                0 15px 15px -5px rgba(226, 91, 32, 0.12),
                0 6px 8px -2px rgba(0, 0, 0, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.15);
        }

        .logo-container {
            margin-bottom: 30px;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            display: block;
            margin: 0 auto 20px;
            box-shadow: 0 20px 40px -8px rgba(226, 91, 32, 0.4),
                0 15px 20px -5px rgba(226, 91, 32, 0.25),
                0 8px 8px -4px rgba(226, 91, 32, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            object-fit: contain;
            background: #f8f9fa;
            padding: 8px;
            transition: all 0.3s ease;
        }

        .logo:hover {
            transform: translateY(-1px) scale(1.02);
            box-shadow: 0 25px 50px -8px rgba(226, 91, 32, 0.5),
                0 20px 25px -5px rgba(226, 91, 32, 0.3),
                0 10px 10px -4px rgba(226, 91, 32, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        .welcome-text {
            margin-bottom: 40px;
        }

        .welcome-text h1 {
            font-size: 28px;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 8px;
            line-height: 1.2;
        }

        .welcome-text p {
            color: #718096;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 24px;
            text-align: left;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 14px;
            color: #2d3748;
        }

        .input-container {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 400;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: #e25b20;
            box-shadow: 0 0 0 3px rgba(226, 91, 32, 0.1);
            transform: translateY(-1px);
            background: rgba(255, 255, 255, 0.98);
        }

        .form-input::placeholder {
            color: #a0aec0;
            font-weight: 400;
        }

        .input-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            font-size: 20px;
        }

        .error-message {
            color: #e53e3e;
            font-size: 13px;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .session-error {
            background: rgba(254, 215, 215, 0.95);
            backdrop-filter: blur(5px);
            color: #c53030;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            border-left: 4px solid #e53e3e;
        }

        .login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #e25b20 0%, #d44a0f 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(226, 91, 32, 0.3),
                0 4px 10px rgba(226, 91, 32, 0.2);
            position: relative;
            overflow: hidden;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(226, 91, 32, 0.4),
                0 6px 14px rgba(226, 91, 32, 0.25);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .loader {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 8px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .btn-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .security-note {
            margin-top: 24px;
            padding: 16px;
            background: rgba(247, 250, 252, 0.9);
            backdrop-filter: blur(5px);
            border-radius: 8px;
            border: 1px solid rgba(226, 232, 240, 0.6);
        }

        .security-note p {
            font-size: 13px;
            color: #4a5568;
            line-height: 1.5;
            margin: 0;
        }

        .security-icon {
            color: #48bb78;
            margin-right: 6px;
        }

        @media (max-width: 480px) {
            body {
                padding: 16px;
            }

            .container {
                padding: 32px 24px;
                border-radius: 20px;
                max-width: 100%;
            }

            .logo {
                width: 70px;
                height: 70px;
            }

            .welcome-text h1 {
                font-size: 24px;
            }

            .welcome-text p {
                font-size: 15px;
            }

            .form-input {
                padding: 14px 16px;
                font-size: 16px;
            }

            .login-btn {
                padding: 14px;
                font-size: 16px;
            }
        }

        @media (max-width: 360px) {
            .container {
                padding: 28px 20px;
            }

            .welcome-text h1 {
                font-size: 22px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        @media (prefers-contrast: high) {
            .container {
                background: white;
                border: 2px solid #000;
            }

            .form-input {
                border: 2px solid #000;
            }

            .form-input:focus {
                border-color: #000;
                box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.3);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('assets/website/indexImages/changed_logo.png') }}" alt="GoLala Logo" class="logo">
        </div>

        <div class="welcome-text">
            <h1>Welcome Back</h1>
            <p>Enter your mobile number to continue</p>
        </div>

        @if(session('error'))
            <div class="session-error">
                <span>⚠️</span> <span id="session-error-text">{{ session('error') }}</span>
            </div>
        @endif

        <form class="form_login" method="POST" novalidate>
            @csrf
            <input type="hidden" name="branch_id" value="{{ $branch_id }}">
            <input type="hidden" name="table_id" value="{{ $table_id }}">
            <div class="form-group">
                <label for="phone" class="form-label">Mobile Number</label>
                <div class="input-container">
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        class="form-input"
                        placeholder="Phone number*"
                        pattern="[0-9]{10}"
                        maxlength="10"
                        required
                        autocomplete="tel"
                        inputmode="numeric"
                    >
                    <span class="input-icon">📱</span>
                </div>
                @error('phone')
                    <div class="error-message" id="phone-error">
                        <span>⚠️</span> <span id="phone-error-text">{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <button type="submit" class="login-btn" name="submit">
                <div class="btn-content">
                    <div class="loader"></div>
                    <span class="btn-text">Continue</span>
                </div>
            </button>
        </form>

        <div class="security-note">
            <p>
                <span class="security-icon">🔒</span>
                Your information is secure and encrypted. We'll send you an OTP to verify your mobile number.
            </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
    <script>
        $(function() {
            // Input formatting for mobile number
            $("#phone").on("input", function() {
                let value = this.value.replace(/\D/g, "");
                if (value.length > 10) {
                    value = value.slice(0, 10);
                }
                this.value = value;
            });

            $('.form_login').on('submit', function(e) {
                e.preventDefault();
                let fd = new FormData(this);
                fd.append('_token', "{{ csrf_token() }}");

                $.ajax({
                    url: "{{ route('website.submit_number') }}",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.loader').show();
                        $('.btn-text').text('Processing...');
                        $('.login-btn').prop('disabled', true);
                    },
                    success: function(result) {
                        if (result.status) {
                            iziToast.success({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                            setTimeout(function() {
                                window.location.href = result.location;
                            }, 500);
                        } else {
                            iziToast.error({
                                title: '',
                                message: result.msg,
                                position: 'topRight'
                            });
                        }
                    },
                    complete: function() {
                        $('.loader').hide();
                        $('.btn-text').text('Continue');
                        $('.login-btn').prop('disabled', false);
                    },
                    error: function(jqXHR, exception) {
                        $('.loader').hide();
                        $('.btn-text').text('Continue');
                        $('.login-btn').prop('disabled', false);
                        iziToast.error({
                            title: '',
                            message: 'Network error. Please try again.',
                            position: 'topRight'
                        });
                    }
                });
            });

            // Auto-focus on page load
            $("#phone").focus();
        });
    </script>
</body>
</html>