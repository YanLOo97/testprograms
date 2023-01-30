import  subprocess

ips = ["8.8.8.8","1.1.1.1"]

for ip in ips:
    result = subprocess.run(["ping","-c","4", ip])
    if result.returncode == 0:
        print(f"{ip} is reachable")
    else:
        print(f"{ip} is not reachable")