liste = [] 
adet = int(input('Kaç Sayı Girilecek: '))
for n in range(adet):
    sayi = int(input('Sayı Giriniz: '))
    liste.append(sayi)
if 0 in liste : 
    tasi=[]
    count=liste.count(0)
    for i in range(count):
        tasi.append(0)
        liste.remove(0)
    tasi += liste
    print(tasi)