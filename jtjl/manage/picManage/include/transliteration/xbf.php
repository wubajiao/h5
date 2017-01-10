<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.42
  $HeadURL: https://svn.code.sf.net/p/coppermine/code/trunk/cpg1.5.x/include/transliteration/xbf.php $
  $Revision: 8846 $
**********************************************/

$base = array(
  0x00 => 'bbess', 'bbeng', 'bbej', 'bbec', 'bbek', 'bbet', 'bbep', 'bbeh', 'bbyeo', 'bbyeog', 'bbyeogg', 'bbyeogs', 'bbyeon', 'bbyeonj', 'bbyeonh', 'bbyeod',
  0x10 => 'bbyeol', 'bbyeolg', 'bbyeolm', 'bbyeolb', 'bbyeols', 'bbyeolt', 'bbyeolp', 'bbyeolh', 'bbyeom', 'bbyeob', 'bbyeobs', 'bbyeos', 'bbyeoss', 'bbyeong', 'bbyeoj', 'bbyeoc',
  0x20 => 'bbyeok', 'bbyeot', 'bbyeop', 'bbyeoh', 'bbye', 'bbyeg', 'bbyegg', 'bbyegs', 'bbyen', 'bbyenj', 'bbyenh', 'bbyed', 'bbyel', 'bbyelg', 'bbyelm', 'bbyelb',
  0x30 => 'bbyels', 'bbyelt', 'bbyelp', 'bbyelh', 'bbyem', 'bbyeb', 'bbyebs', 'bbyes', 'bbyess', 'bbyeng', 'bbyej', 'bbyec', 'bbyek', 'bbyet', 'bbyep', 'bbyeh',
  0x40 => 'bbo', 'bbog', 'bbogg', 'bbogs', 'bbon', 'bbonj', 'bbonh', 'bbod', 'bbol', 'bbolg', 'bbolm', 'bbolb', 'bbols', 'bbolt', 'bbolp', 'bbolh',
  0x50 => 'bbom', 'bbob', 'bbobs', 'bbos', 'bboss', 'bbong', 'bboj', 'bboc', 'bbok', 'bbot', 'bbop', 'bboh', 'bbwa', 'bbwag', 'bbwagg', 'bbwags',
  0x60 => 'bbwan', 'bbwanj', 'bbwanh', 'bbwad', 'bbwal', 'bbwalg', 'bbwalm', 'bbwalb', 'bbwals', 'bbwalt', 'bbwalp', 'bbwalh', 'bbwam', 'bbwab', 'bbwabs', 'bbwas',
  0x70 => 'bbwass', 'bbwang', 'bbwaj', 'bbwac', 'bbwak', 'bbwat', 'bbwap', 'bbwah', 'bbwae', 'bbwaeg', 'bbwaegg', 'bbwaegs', 'bbwaen', 'bbwaenj', 'bbwaenh', 'bbwaed',
  0x80 => 'bbwael', 'bbwaelg', 'bbwaelm', 'bbwaelb', 'bbwaels', 'bbwaelt', 'bbwaelp', 'bbwaelh', 'bbwaem', 'bbwaeb', 'bbwaebs', 'bbwaes', 'bbwaess', 'bbwaeng', 'bbwaej', 'bbwaec',
  0x90 => 'bbwaek', 'bbwaet', 'bbwaep', 'bbwaeh', 'bboe', 'bboeg', 'bboegg', 'bboegs', 'bboen', 'bboenj', 'bboenh', 'bboed', 'bboel', 'bboelg', 'bboelm', 'bboelb',
  0xA0 => 'bboels', 'bboelt', 'bboelp', 'bboelh', 'bboem', 'bboeb', 'bboebs', 'bboes', 'bboess', 'bboeng', 'bboej', 'bboec', 'bboek', 'bboet', 'bboep', 'bboeh',
  0xB0 => 'bbyo', 'bbyog', 'bbyogg', 'bbyogs', 'bbyon', 'bbyonj', 'bbyonh', 'bbyod', 'bbyol', 'bbyolg', 'bbyolm', 'bbyolb', 'bbyols', 'bbyolt', 'bbyolp', 'bbyolh',
  0xC0 => 'bbyom', 'bbyob', 'bbyobs', 'bbyos', 'bbyoss', 'bbyong', 'bbyoj', 'bbyoc', 'bbyok', 'bbyot', 'bbyop', 'bbyoh', 'bbu', 'bbug', 'bbugg', 'bbugs',
  0xD0 => 'bbun', 'bbunj', 'bbunh', 'bbud', 'bbul', 'bbulg', 'bbulm', 'bbulb', 'bbuls', 'bbult', 'bbulp', 'bbulh', 'bbum', 'bbub', 'bbubs', 'bbus',
  0xE0 => 'bbuss', 'bbung', 'bbuj', 'bbuc', 'bbuk', 'bbut', 'bbup', 'bbuh', 'bbweo', 'bbweog', 'bbweogg', 'bbweogs', 'bbweon', 'bbweonj', 'bbweonh', 'bbweod',
  0xF0 => 'bbweol', 'bbweolg', 'bbweolm', 'bbweolb', 'bbweols', 'bbweolt', 'bbweolp', 'bbweolh', 'bbweom', 'bbweob', 'bbweobs', 'bbweos', 'bbweoss', 'bbweong', 'bbweoj', 'bbweoc',
);