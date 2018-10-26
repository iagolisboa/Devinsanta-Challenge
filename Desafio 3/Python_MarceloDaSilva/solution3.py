def valores_ao_quadrado():
    valores = []
    for i in range(2,301):
        valores.append(i**2)
    return valores

def fatorial(valor):
    total = 1
    contador = 1
    while contador <=valor:
        total *= contador
        contador += 1
    return total

def solucao3():
    ###
    # Somente os 50 primeiros elementos
    # PS : meu processador não suportou toda a lista XD
    
    valores = valores_ao_quadrado()
    for i, v in enumerate(valores[:50]):
        print(f'{i+1}º - {v} - fatorial {fatorial(v)}\n\n')

solucao3()


