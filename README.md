
# Simple PHP web

## Usage
# Run with docker:
docker run -it --rm --name simplewebphp -p 8080:8080 -v $(pwd)/simplewebphp:/data php bash

# Once the container is up start the server:
php -S 0.0.0.0:8080 -t /data
