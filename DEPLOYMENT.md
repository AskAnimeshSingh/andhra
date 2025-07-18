# Laravel to Vercel Deployment Guide

## Overview
This Laravel application is configured to deploy on Vercel using the `vercel-php` runtime. The application uses a FreeDB MySQL database hosted externally.

## Database Configuration
- **Host**: sql.freedb.tech
- **Port**: 3306
- **Database**: freedb_aandhra
- **Username**: freedb_aandhra
- **Password**: *D5zv#vZ$S%AU*f

## Deployment Steps

### 1. Environment Variables Setup
In your Vercel dashboard, set the following environment variables:

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

### 2. Vercel Configuration
The `vercel.json` file is already configured with:
- PHP runtime version 0.6.0
- All routes pointing to `api/index.php`
- Database environment variables
- Build optimization settings

### 3. Build Process
The deployment will automatically:
- Install Composer dependencies (production only)
- Generate application key
- Clear and cache configurations
- Optimize the application
- Set up storage directories

### 4. Important Notes

#### File Storage
Since Vercel is serverless, file uploads should be handled differently:
- Use external storage services (AWS S3, Google Cloud Storage, etc.)
- Avoid storing files in the local filesystem
- Update file upload logic to use cloud storage

#### Sessions
- Sessions are configured to use file storage
- Consider using Redis or database sessions for better performance

#### Cache
- Cache is configured to use file storage
- Consider using Redis for better performance

### 5. Post-Deployment Tasks

1. **Update APP_URL**: Replace `your-vercel-domain.vercel.app` with your actual Vercel domain
2. **Test Database Connection**: Ensure the FreeDB connection works from Vercel
3. **File Uploads**: Update any file upload functionality to use cloud storage
4. **SSL Certificate**: Vercel provides automatic SSL certificates

### 6. Troubleshooting

#### Common Issues:
1. **Database Connection**: Ensure FreeDB allows connections from Vercel's IP ranges
2. **File Permissions**: Storage directories are created during build
3. **Memory Limits**: Vercel has memory limits for serverless functions
4. **Timeout Issues**: Long-running processes may timeout

#### Debug Mode:
For debugging, temporarily set:
```
APP_DEBUG=true
```

### 7. Performance Optimization

1. **Enable Route Caching**: Routes are cached during build
2. **Enable Config Caching**: Configuration is cached during build
3. **Enable View Caching**: Views are cached during build
4. **Use CDN**: Vercel provides global CDN automatically

## Security Considerations

1. **Environment Variables**: Never commit sensitive data to version control
2. **Database Security**: Ensure FreeDB is properly secured
3. **File Uploads**: Validate and sanitize all file uploads
4. **HTTPS**: Vercel provides automatic HTTPS

## Monitoring

1. **Vercel Analytics**: Use Vercel's built-in analytics
2. **Error Tracking**: Consider integrating error tracking services
3. **Database Monitoring**: Monitor FreeDB performance and usage
4. **Application Logs**: Check Vercel function logs for errors 