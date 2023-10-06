from django.urls import path 
from . import views 
from django.conf.urls import include 
app_name = "projeto"
urlpatterns = [
    path("", views.index, name="index"),
    path("cadastro/", views.cadastro, name="cadastro"),
    path("excluir/<int:id>", views.excluir, name="excluir"),
    path("editar/<int:id>", views.editar, name="editar"),
    path("comentario/", views.comentario, name="comentario"),
    path("saibamais/", views.saibamais, name="saibamais"),
    path("excluir_comentario/<int:id>", views.excluir_comentario, name ="excluir_comentario" ),
    path("editar_comentario/<int:id>", views.editar_comentario, name ="editar_comentario" ),
    
    
]