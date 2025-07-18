@echo off
echo 🚀 Starting Laravel to Vercel Deployment...

REM Check if Node.js is installed
node --version >nul 2>&1
if %errorlevel% neq 0 (
    echo ❌ Node.js is not installed. Please install it first.
    echo Download from: https://nodejs.org/
    pause
    exit /b 1
)

REM Check if Vercel CLI is installed
vercel --version >nul 2>&1
if %errorlevel% neq 0 (
    echo 📦 Installing Vercel CLI...
    npm install -g vercel
)

REM Check if we're in a git repository
git rev-parse --git-dir >nul 2>&1
if %errorlevel% neq 0 (
    echo ❌ Not in a git repository. Please initialize git first:
    echo git init
    echo git add .
    echo git commit -m "Initial commit"
    pause
    exit /b 1
)

REM Check if we have a remote repository
git remote get-url origin >nul 2>&1
if %errorlevel% neq 0 (
    echo ❌ No remote repository found. Please add your GitHub repository:
    echo git remote add origin https://github.com/yourusername/yourrepo.git
    pause
    exit /b 1
)

echo ✅ Environment checks passed

REM Create .env file for local development if it doesn't exist
if not exist .env (
    echo 📝 Creating .env file...
    (
        echo APP_NAME=Laravel
        echo APP_ENV=local
        echo APP_KEY=
        echo APP_DEBUG=true
        echo APP_URL=http://localhost
        echo.
        echo LOG_CHANNEL=stack
        echo LOG_DEPRECATIONS_CHANNEL=null
        echo LOG_LEVEL=debug
        echo.
        echo DB_CONNECTION=mysql
        echo DB_HOST=sql.freedb.tech
        echo DB_PORT=3306
        echo DB_DATABASE=freedb_aandhra
        echo DB_USERNAME=freedb_aandhra
        echo DB_PASSWORD=*D5zv#vZ$S%%AU*f
        echo.
        echo BROADCAST_DRIVER=log
        echo CACHE_DRIVER=file
        echo FILESYSTEM_DISK=local
        echo QUEUE_CONNECTION=sync
        echo SESSION_DRIVER=file
        echo SESSION_LIFETIME=120
        echo.
        echo MEMCACHED_HOST=127.0.0.1
        echo.
        echo REDIS_HOST=127.0.0.1
        echo REDIS_PASSWORD=null
        echo REDIS_PORT=6379
        echo.
        echo MAIL_MAILER=smtp
        echo MAIL_HOST=mailpit
        echo MAIL_PORT=1025
        echo MAIL_USERNAME=null
        echo MAIL_PASSWORD=null
        echo MAIL_ENCRYPTION=null
        echo MAIL_FROM_ADDRESS="hello@example.com"
        echo MAIL_FROM_NAME="${APP_NAME}"
        echo.
        echo AWS_ACCESS_KEY_ID=
        echo AWS_SECRET_ACCESS_KEY=
        echo AWS_DEFAULT_REGION=us-east-1
        echo AWS_BUCKET=
        echo AWS_USE_PATH_STYLE_ENDPOINT=false
        echo.
        echo PUSHER_APP_ID=
        echo PUSHER_APP_KEY=
        echo PUSHER_APP_SECRET=
        echo PUSHER_HOST=
        echo PUSHER_PORT=443
        echo PUSHER_SCHEME=https
        echo PUSHER_APP_CLUSTER=mt1
        echo.
        echo VITE_APP_NAME="${APP_NAME}"
        echo VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
        echo VITE_PUSHER_HOST="${PUSHER_HOST}"
        echo VITE_PUSHER_PORT="${PUSHER_PORT}"
        echo VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
        echo VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
    ) > .env
    echo ✅ .env file created
)

REM Install Composer dependencies
echo 📦 Installing Composer dependencies...
composer install --no-dev --optimize-autoloader

REM Generate application key
echo 🔑 Generating application key...
php artisan key:generate --force

REM Clear and cache configurations
echo ⚙️ Optimizing Laravel...
php artisan config:clear
php artisan config:cache
php artisan route:clear
php artisan route:cache
php artisan view:clear
php artisan view:cache
php artisan optimize

REM Create storage directories
echo 📁 Creating storage directories...
if not exist storage\framework\cache mkdir storage\framework\cache
if not exist storage\framework\sessions mkdir storage\framework\sessions
if not exist storage\framework\views mkdir storage\framework\views
if not exist storage\logs mkdir storage\logs

echo ✅ Laravel optimization completed

REM Deploy to Vercel
echo 🚀 Deploying to Vercel...
vercel --prod

echo ✅ Deployment completed!
echo.
echo 📋 Next steps:
echo 1. Update your APP_URL in Vercel environment variables
echo 2. Test your application functionality
echo 3. Monitor logs for any issues
echo 4. Consider setting up cloud storage for file uploads
echo.
echo 🔗 Your application should be live at the URL provided by Vercel
pause 