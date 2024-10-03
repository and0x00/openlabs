# Insecure Transport 🔓

## Guide

This lab simulates a scenario of insecure data transport (HTTP instead of HTTPS). The goal is for the user to understand the vulnerabilities and risks of using HTTP in environments that require secure transmission of information.

### Requirements

Before you begin, ensure you have the following installed:

- **Docker**
- **Docker Compose**
- **Wireshark** or other **Traffic analysis tool**

### Lab Steps

1. **Clone the repository**:
   Download the full repository and navigate to the `insecure-transport` lab folder:
   ```bash
   git clone https://github.com/and0x00/openlabs.git
   cd openlabs/insecure-transport
   ```
2. **Start the lab using Docker Compose**:
   Start the Docker environment by running:
   ```bash
   docker-compose up -d
   ```
3. **Access the vulnerable service**:
   The lab is mapped to ports 80 for HTTP and 443 for HTTPS. Open your browser and navigate to the following to explore:

- HTTP (insecure):
```
http://localhost:80
```
- HTTPS (secure):
```
https://localhost:443
```

4. **Exploration and analysis**:

   In this section, you will analyze the network traffic to understand the difference between insecure (HTTP) and secure (HTTPS) transport. Follow the steps below to explore both scenarios:

   **Step 1: Inspect HTTP traffic (insecure)**

   - Open your browser and navigate to:
     ```bash
     http://localhost:80
     ```

   - You will be prompted to enter login credentials. Enter any dummy credentials (e.g., `user: test`, `password: test`) and submit the form.

   - Now, open **Wireshark** and start capturing traffic on the interface your browser is using (usually your main network interface, like Ethernet or Wi-Fi). Filter the traffic by HTTP to focus on the relevant data:
     ```bash
     http
     ```

   - Look for the POST request sent when you submitted the login form. In Wireshark, you'll be able to see the data in **plain text**, including the username and password you entered. This illustrates how HTTP sends sensitive information without encryption, making it vulnerable to **Man-in-the-Middle (MitM)** attacks.

   - To find the credentials, check the **HTTP POST** request in the Wireshark capture and look at the payload in the request body. You should see the username and password as they were sent by the browser.

   **Step 2: Inspect HTTPS traffic (secure)**

   - Now, open your browser and navigate to the HTTPS version of the site:
     ```bash
     https://localhost:443
     ```

   - Again, enter any dummy credentials and submit the login form.

   - Return to Wireshark and start capturing traffic, but this time filter the traffic by HTTPS:
     ```bash
     ssl
     ```

   - Unlike the HTTP scenario, you won't be able to see the credentials or any other sensitive information in the traffic. The HTTPS protocol encrypts the data, meaning that even if someone intercepts the traffic, they won't be able to read or tamper with the information being transmitted.

   - Notice the difference in the Wireshark capture. The data is encrypted, and sensitive details like the login credentials cannot be easily extracted. This demonstrates the importance of using HTTPS for secure data transmission.

**Conclusion**:

Through these steps, you can clearly observe the vulnerabilities in HTTP, where data is transmitted in plain text, making it easy for attackers to capture sensitive information. In contrast, HTTPS ensures that data is encrypted, protecting it from being intercepted or altered during transmission.

5. **Stop the lab**:
   After you have finished exploring, shut down the Docker containers:
   ```bash
   docker-compose down
   ```

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

___

<a href="https://donate.stripe.com/7sI29z9js2draModQR">
    <img src="https://github.com/and0x00/and0x00/raw/main/buy_me_a_coffee.gif" alt="Buy Me A Coffee" width="150" />
</a>
