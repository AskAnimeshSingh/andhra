# Laravel to Vercel Deployment Guide

## 🚀 Quick Start

This Laravel application is configured to deploy on Vercel using the `vercel-php` runtime. The application uses a FreeDB MySQL database hosted externally.

## 📋 Prerequisites

1. **Vercel Account**: Sign up at [vercel.com](https://vercel.com)
2. **GitHub Repository**: Your code should be in a GitHub repository
3. **Vercel CLI** (optional): `npm install -g vercel`

## 🔧 Database Configuration

Your FreeDB database is already configured:
- **Host**: sql.freedb.tech
- **Port**: 3306
- **Database**: freedb_aandhra
- **Username**: freedb_aandhra
- **Password**: *D5zv#vZ$S%AU*f

## 📦 Files Created/Modified

### New Files:
- `vercel.json` - Vercel configuration
- `.vercelignore` - Files to exclude from deployment
- `vercel-build.sh` - Build script (for reference)
- `deploy-vercel.sh` - Deployment automation script
- `app/Services/FileUploadService.php` - Cloud storage service
- `DEPLOYMENT.md` - Detailed deployment guide
- `VERCEL_README.md` - This file

### Modified Files:
- `app/Http/Controllers/Kitchen/ChefController.php` - Updated file upload logic
- `app/Http/Controllers/Admin/ChefController.php` - Updated file upload logic

## 🚀 Deployment Steps

### Method 1: Automatic Deployment (Recommended)

1. **Push to GitHub**:
   ```bash
   git add .
   git commit -m "Configure for Vercel deployment"
   git push origin main
   ```

2. **Connect to Vercel**:
   - Go to [vercel.com](https://vercel.com)
   - Click "New Project"
   - Import your GitHub repository
   - Vercel will automatically detect the Laravel configuration

3. **Set Environment Variables**:
   In your Vercel project settings, add these environment variables:
   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://your-vercel-domain.vercel.app
   DB_CONNECTION=mysql
   DB_HOST=sql.freedb.tech
   DB_PORT=3306
   DB_DATABASE=freedb_aandhra
   DB_USERNAME=freedb_aandhra
   DB_PASSWORD=*D5zv#vZ$S%AU*f
   CACHE_DRIVER=file
   SESSION_DRIVER=file
   QUEUE_CONNECTION=sync
   ```

4. **Deploy**:
   - Vercel will automatically deploy on every push to your main branch
   - Or manually trigger deployment from the Vercel dashboard

### Method 2: Manual Deployment

1. **Install Vercel CLI**:
   ```bash
   npm install -g vercel
   ```

2. **Run Deployment Script**:
   ```bash
   chmod +x deploy-vercel.sh
   ./deploy-vercel.sh
   ```

3. **Follow the prompts** to complete the deployment

## ⚙️ Configuration Details

### Vercel Configuration (`vercel.json`)
```json
{
  "functions": {
    "api/index.php": {
      "runtime": "vercel-php@0.6.0"
    }
  },
  "routes": [
    {
      "src": "/(.*)",
      "dest": "api/index.php"
    }
  ],
  "build": {
    "env": {
      "COMPOSER_FLAGS": "--no-dev --optimize-autoloader"
    }
  }
}
```

### File Upload Service
The application now uses a `FileUploadService` that can handle both local and cloud storage. For production, consider:

1. **AWS S3**: Set up S3 bucket and configure credentials
2. **Google Cloud Storage**: Alternative cloud storage option
3. **Cloudinary**: Image optimization and storage service

## 🔍 Troubleshooting

### Common Issues:

1. **Database Connection Error**:
   - Verify FreeDB credentials
   - Check if FreeDB allows connections from Vercel's IP ranges
   - Test connection locally first

2. **File Upload Issues**:
   - Vercel is serverless, so local file storage won't persist
   - Use the `FileUploadService` for cloud storage
   - Consider setting up AWS S3 or similar

3. **Memory/Timeout Issues**:
   - Vercel has limits on function execution time
   - Optimize database queries
   - Use caching where possible

4. **Environment Variables**:
   - Ensure all required variables are set in Vercel dashboard
   - Check for typos in variable names

### Debug Mode:
For debugging, temporarily set:
```
APP_DEBUG=true
```

## 📊 Monitoring

1. **Vercel Analytics**: Built-in performance monitoring
2. **Function Logs**: Check Vercel function logs for errors
3. **Database Monitoring**: Monitor FreeDB usage and performance
4. **Error Tracking**: Consider integrating services like Sentry

## 🔒 Security Considerations

1. **Environment Variables**: Never commit sensitive data
2. **Database Security**: Ensure FreeDB is properly secured
3. **File Uploads**: Validate and sanitize all uploads
4. **HTTPS**: Vercel provides automatic HTTPS

## 🚀 Performance Optimization

1. **Route Caching**: Routes are cached during build
2. **Config Caching**: Configuration is cached during build
3. **View Caching**: Views are cached during build
4. **CDN**: Vercel provides global CDN automatically

## 📞 Support

If you encounter issues:

1. Check the [DEPLOYMENT.md](DEPLOYMENT.md) file for detailed information
2. Review Vercel function logs
3. Test database connectivity
4. Verify environment variables

## 🎉 Success!

Once deployed, your Laravel application will be available at your Vercel domain with:
- ✅ Automatic HTTPS
- ✅ Global CDN
- ✅ Automatic deployments on git push
- ✅ Built-in analytics
- ✅ Serverless architecture

Remember to update your `APP_URL` environment variable with your actual Vercel domain once deployed! 