import requests
url = 'http://openflex.eric/api/index.php/pointage/list?api_key=3cc7b729b26cdd075126fd9e19b77c9b8f2c24d5'
r = requests.get(url = url)
print(r.text)

