🖥️ Changing TryHackMe Machine IP to a Domain Name

Sometimes in TryHackMe rooms, the target website works better with a **domain name instead of an IP address**.
In such cases, we can manually map the **IP address to a hostname** using the `/etc/hosts` file in Linux.

---

📌 Why We Do This

Some web applications rely on **virtual hosts (vhosts)**.
If we access the site using only the **IP address**, the website may not load correctly.

Example:

Instead of visiting:

> http://10.10.10.10

We may need to visit:

> http://fakebank

To make this work, we map the IP to the hostname.

---

# ⚙️ Step 1 — Edit the Hosts File

Open the hosts file with root privileges.

```bash
sudo nano /etc/hosts
```

---

# ⚙️ Step 2 — Add the Target IP and Hostname

At the bottom of the file, add a new entry.

Example:

```
10.10.10.10   fakebank
```

Format:

```
IP_ADDRESS   DOMAIN_NAME
```

Example from a TryHackMe room:

```
10.67.178.104   fake_bank
```

---

# ⚙️ Step 3 — Save the File

If using **nano**:

Press:

```
CTRL + X
Y
ENTER
```

This saves the file.

---

# ⚙️ Step 4 — Access the Website

Now open the browser and visit:

```
http://fakebank
```

Instead of using the IP.

---

# 📖 How It Works

The `/etc/hosts` file is a **local DNS mapping file**.

When you type a domain like:

```
http://fakebank
```

Linux checks the `/etc/hosts` file first.

If it finds:

```
10.10.10.10 fakebank
```

It redirects the request to that IP.

---
# 💡 Quick Example

```
sudo nano /etc/hosts
```

Add:

```
10.67.178.104 fake_bank
```

Then open:

```
http://fake_bank
```

---

