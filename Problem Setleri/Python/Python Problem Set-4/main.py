liste = []
lst = []
adet = int(input('Kaç Sayı Girilecek: '))
for n in range(adet):
    sayi = int(input('Sayıyı Gir: '))
    liste.append(sayi)
    if sayi%2 == 1:
        lst.append(sayi)    
print(liste)
print("Liste İçindeki En Büyük Sayı :", max(lst))