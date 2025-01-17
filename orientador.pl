curso(arte).
curso(sociais).
curso(economia).
curso(tecnologia).
curso(biologia).

feminino(linda).
feminino(maria).
feminino(ana).
feminino(bela).

masculino(mario).
masculino(veloso).

vocacao(mario, arte).
vocacao(linda, sociais).
vocacao(maria, economia).
vocacao(veloso, tecnologia).
vocacao(ana, biologia).

indefinido(bela, 1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1).

arte(Elem,[ ],0) .
arte(Elem,[Elem|Y],N) :-
    arte(Elem,Y,N1),
    N is N1 + 1.
arte(Elem,[Elem1|Y], N) :-
    Elem \== Elem1,
    arte(Elem,Y,N).

sociais(Elem,[ ],0) .
sociais(Elem,[Elem|Y],N) :-
    sociais(Elem,Y,N1),
    N is N1 + 1.
sociais(Elem,[Elem1|Y], N) :-
    Elem \== Elem1,
    sociais(Elem,Y,N).

economia(Elem,[ ],0) .
economia(Elem,[Elem|Y],N) :-
    economia(Elem,Y,N1),
    N is N1 + 1.
economia(Elem,[Elem1|Y], N) :-
    Elem \== Elem1,
    economia(Elem,Y,N).

tecnologia(Elem,[ ],0) .
tecnologia(Elem,[Elem|Y],N) :-
    tecnologia(Elem,Y,N1),
    N is N1 + 1.
tecnologia(Elem,[Elem1|Y], N) :-
    Elem \== Elem1,
    tecnologia(Elem,Y,N).

biologia(Elem,[ ],0).
biologia(Elem,[Elem|Y],N) :-
    biologia(Elem,Y,N1),
    N is N1 + 1.
biologia(Elem,[Elem1|Y], N) :-
    Elem \== Elem1,
    biologia(Elem,Y,N).


max([X],X).
max([X|T],X):-
    max(T,Y),
    X>Y,!.
max([_|T],Z):-
    max(T,Z).

verificar(N,'arte'):-
    N=0,!.
verificar(N,'sociais'):-
    N=1,!.
verificar(N,'economia'):-
    N=2,!.
verificar(N,'tecnologia'):-
    N=3,!.
verificar(N,'biologia'):-
    N=4.

pos(X,[X|_], Len, Len):- !.

pos(X,[_H| T], LE, LF) :-
  L1 is LE + 1,
  pos(X,T, L1, LF).

imprimir([H|T]):-
    write(H),
    imprimir(T).


adicionar_ficheiro(Nom,Type):-
    asserta(vocacao(Nom,Type)).

carreira( Nom, Q01, Q02, Q03, Q04, Q05, Q06, Q07, Q08, Q09, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19,
        Q20, Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30, Q31, Q32, Q33, Q34, Q35, Q36, Q37, Q38, Q39,
        Q40, Q41, Q42, Q43, Q44, Q45, Q46, Q47, Q48, Q49, Q50, Q51, Q52, Q53, Q54, Q55, Q56, Q57, Q58, Q59,
        Q60, Q61, Q62, Q63, Q64, Q65, Q66, Q67, Q68, Q69, Q70, Q71, Q72, Q73, Q74, Q75, Q76, Q77, Q78, Q79, Q80) :-

        arte(1, [Q04, Q09, Q12, Q20, Q28, Q31, Q35, Q39, Q43, Q46, Q50, Q65, Q67, Q68, Q75, Q77], A),
        sociais(1, [Q06, Q13, Q23, Q25, Q34, Q37, Q38, Q42, Q49, Q52, Q55, Q63, Q66, Q70, Q72, Q78], S),
        economia(1, [Q05, Q10, Q15, Q19, Q21, Q26, Q29, Q33, Q36, Q44, Q53, Q56, Q59, Q62, Q71, Q80], E),		
        tecnologia(1, [Q01, Q07, Q11, Q17, Q18, Q24, Q30, Q41, Q48, Q51, Q58, Q60, Q61, Q64, Q73, Q79], T),                
        biologia(1, [Q02, Q03, Q08, Q14, Q16, Q22, Q27, Q32, Q40, Q45, Q47, Q54, Q57, Q69, Q74, Q76], B),
            max([A, S, E, T, B],R),
            pos(R,[A, S, E, T, B],0,N),
            verificar(N,Type),
            write(Type),
            write(R),
            adicionar_ficheiro(Nom,Type).


masculino(herman dyabanza).
indefinido(herman dyabanza, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2).
feminino(inocãªncia daniel).
vocacao(inocãªncia daniel,arte).
feminino(inocãªncia daniel).
vocacao(inocãªncia daniel,sociais).
