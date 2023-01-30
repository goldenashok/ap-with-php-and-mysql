# ap-with-php-and-mysql

| S.No | URL | Method | Data | Response |
| --- | --- | --- | --- | --- |
|1 | http://localhost/web/rest-api/fetch-all-student.php | GET | | |
|2 | http://localhost/web/rest-api/fetch-single-student.php | POST | {'sid': 2} | |
|3 | http://localhost/web/rest-api/insert-student.php | POST | {"sname": "Ashok",	"sage": "33",	"scity": "chennai" } | |
|4 | http://localhost/web/rest-api/update-student.php | POST | {'sid': 2, "sname": "Ashok",	"sage": "33",	"scity": "chennai" } | |
|5 | http://localhost/web/rest-api/delete-student.php | POST | {'sid': 2} | |
|6 | http://localhost/web/rest-api/search-student.php | POST | {'search': "sub"} | |
| --- | --- | --- | --- | --- |


## Delete Response
```sh
{
    "status": "success",
    "msg": "Search list",
    "data": [
        {
            "id": "5",
            "name": "Subash",
            "age": "27",
            "city": "Bhopal"
        }
    ]
}
```
