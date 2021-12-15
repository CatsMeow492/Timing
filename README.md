# Timing 10.129.246.163

Core Concepts:

## Enumeration

```
nmap -sV -sC 10.129.246.163 -o nmap.timing.txt
wget https://raw.githubusercontent.com/rbsec/dnscan/master/subdomains-10000.txt
gobuster dir -u timing.htb -w subdomains-10000.txt -o gobuster.timing.txt
wfuzz -H "Host: FUZZ.timing.htb" -w subdomains-10000.txt --hh 290 --hc 302 http://timing.htb/ > fuzz.timing.txt
```
