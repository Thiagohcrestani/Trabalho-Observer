Padrão Observer.

Observer é um padrão de projeto que define um para muitos, de forma que quando um objeto mude de estado, todos os outros são notificados e atualizados automaticamente.
Ele permite que um objeto avise o outro quando é atualizado ou recebe alguma evento.

Objetivo:

Quando um objeto que possua agregações deve permitir que seus objetos sejam acessados sem que sua estrutura seja exposta.

Quando Utilizar:

Ele é utilizado quando uma abstração tem 2 aspectos, um depende do outro.

2 Sistemas que utilizam: 

Um caixa eletrônico, pois quando ocorre um saque, deve haver uma cominucação para o sistema que foi retirado dinheiro da sua conta, assim a mesma vai ser atualizada.

Um sistema de lanchonete, pois quando ocorre um pedido, o sistema deve ser avisado que aquele numero esta pronto.



