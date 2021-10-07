# PHPMinds Website 

Built on the Slim framework, bref and deployed to AWS Lambda 


requires
```bash
Docker, AWS CLI , Serverless, Nodejs 14+ 
```

###Installation

```npm install -g serverless```


To run the application in development, you can run these commands from the root directory

```bash
composer start
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

Run this command in the application directory to run the test suite

```bash
composer test
```

###to deploy 

```serverless deploy --aws-profile <your profile> ```

Deploy to S3 separately
`aws s3 sync public s3://<bucket-name>/<public-folder> --delete`

That's it for now! 
