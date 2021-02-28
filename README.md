# Transferio

  

This is just a simple project to upload files from the terminal

  

## How to use it?

### Uploading a file
the following command will return an url that you can use to get the file later
```
curl -T hello.txt transferio.herokuapp.com
```

### Downloading the file
```
curl http://transferio.herokuapp.com/YPMFOk7w1tz4tCt2/hello.txt
```

Files will no last more than 24 hours, just keep that in mind
