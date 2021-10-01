Declare in composer.json the repository :
``` json
"repositories": [
    {
      "type": "github",
      "url": "https://github.com/dnd-kallard/csv-bundle.git"
    }
  ]
```

Add this package with `composer req "dnd-kallard/csv-bundle @dev"`

Command `bin/console csv:grid [filepath]`
