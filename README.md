# Commands
`bin/console app:update-services-list` Performs an update of the list of available services and methods from `Swager OpenAPI`. 
The data is parsed from json, which can be placed in `openAPI.json`, the result is written` src/config/restMethodsV2.json`

`bin/console app:generate-services` creates services with methods and examples for methods in `examples / RESTv2`,
a list services and their methods are read from `src/config/restMethodsV2.json`