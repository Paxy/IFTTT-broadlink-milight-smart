#!/usr/bin/python

import sys
import broadlink

mac="B4430DFBD380".decode('hex')
devices = broadlink.gendevice(10026,('172.16.1.167', 80),mac)

devices.auth()
code=sys.argv[1].decode('hex')
devices.send_data(code)

