import broadlink
import time
#devices = broadlink.discover(timeout=1)
#print devices[0].mac
#print devices[0].host
#print devices[0].type


mac="B4430DFBD380".decode('hex')
devices = broadlink.gendevice(10026,('172.16.1.167', 80),mac)

devices.auth()
devices.enter_learning()

time.sleep (5);

ir_packet = devices.check_data()
print ir_packet.encode('hex')



