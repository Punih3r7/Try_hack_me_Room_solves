# File Transfer via Python HTTP Server (Victim ↔ Host)

## 📌 Overview

This setup demonstrates a simple file transfer method where a **victim machine** hosts files using a Python HTTP server, and a **host (attacker or receiver)** downloads those files using `wget`.

---

## ⚙️ Requirements

* Python 3 installed on the **victim machine**
* `wget` installed on the **host machine**
* Network connectivity between both machines

---


## 🔄 Workflow Table

| **Victim (File Sender)**             | **Host (File Receiver)**            |
| ------------------------------------ | ----------------------------------- |
| Navigate to file directory           | Ensure network access to victim     |
| `cd /path/to/files`                  |                                     |
| Start HTTP server                    | Download file using wget            |
| `python3 -m http.server 8000`        | `wget http://<victim-ip>:8000/file` |
| Shares files over HTTP               | Saves file locally                  |
| Keeps server running during transfer | File download completes             |

---

##  Important Notes

* Ensure the correct IP address of the victim machine is used.
* Port `8000` must be open and reachable.
* This method is **not secure** (no encryption), avoid using it over public networks.
* Stop the server after use:

```bash
CTRL + C
```

---

