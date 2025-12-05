<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(to right, #fd6f00, #e46400);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #fd6f00;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            color: #333;
            padding: 8px;
            background: white;
            border-radius: 3px;
            border-left: 3px solid #fd6f00;
        }
        .message-box {
            background: white;
            padding: 15px;
            border-radius: 3px;
            border-left: 3px solid #fd6f00;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New Contact Form Submission</h2>
        <p>Portfolio Website</p>
    </div>
    
    <div class="content">
        <div class="field">
            <span class="label">Name:</span>
            <div class="value">{{ $name }}</div>
        </div>
        
        <div class="field">
            <span class="label">Email:</span>
            <div class="value">{{ $email }}</div>
        </div>
        
        <div class="field">
            <span class="label">Phone Number:</span>
            <div class="value">{{ $phone }}</div>
        </div>
        
        <div class="field">
            <span class="label">Service of Interest:</span>
            <div class="value">{{ $service }}</div>
        </div>
        
        <div class="field">
            <span class="label">Timeline:</span>
            <div class="value">{{ $timeline }}</div>
        </div>
        
        <div class="field">
            <span class="label">Project Details:</span>
            <div class="message-box">{{ $message }}</div>
        </div>
    </div>
</body>
</html>


