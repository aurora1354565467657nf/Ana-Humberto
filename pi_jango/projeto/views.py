from django.shortcuts import render, HttpResponseRedirect
from .models import Pessoa,Comentario
from .forms import PessoaForm,ComentarioForm
from django.contrib.auth.decorators import login_required, user_passes_test
from django.contrib.auth import login
# Create your views here.
def validar_index(user):
    return user.is_superuser or user.groups.filter(name__in=["Professor", "Aluno"]).exists()

def index(request):    
    return render(request,"index.html")
def saibamais(request):    
    return render(request,"saibamais.html")

@login_required(login_url = "login")
@user_passes_test(validar_index, login_url = "login")
def index_2 (request):    
    pessoas = Pessoa.objects.all()
    return render(request,"index.html",{"listaPessoa":pessoas})

def cadastro(request):
    if request.method == "POST":
        form = PessoaForm(request.POST)
        if form.is_valid():
            user = form.save()
            login(request, user)
            return HttpResponseRedirect("/")
    form = PessoaForm()
    return render(request,"cadastro.html", {"form":form})

def excluir(request, id):
    pessoa = Pessoa.objects.get(pk=id)
    pessoa.delete()
    return HttpResponseRedirect("/")
def editar(request,id):
    pessoa = Pessoa.objects.get(pk=id)
    if request.method == "POST":
        form = PessoaForm(request.POST, instance=pessoa)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect("/")
    form = PessoaForm(instance=pessoa)
    return render(request,"cadastro.html", {"form":form})

@login_required(login_url = "login")
def comentario(request):
    comentarios = Comentario.objects.all()
    if request.method == "POST":
        form = ComentarioForm(request.POST)
        if form.is_valid():
            #print (request.user.id)
            comentario = form.save(commit=False)
            comentario.pessoa_id = request.user.id
            comentario.save()
            #return HttpResponseRedirect("/comentario")
    form = ComentarioForm()
    return render(request,"comentario.html", {"form":form,"comentarios":comentarios })

@login_required(login_url = "login")
def excluir_comentario(request,id):
    comentario = Comentario.objects.get(pk=id)
    comentario.delete()
    return HttpResponseRedirect("/comentario")

@login_required(login_url = "login")
def editar_comentario(request,id):
    comentario = Comentario.objects.get(pk=id)
    if request.method == "POST":
        form = ComentarioForm(request.POST, instance=comentario)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect("/comentario")
    form = ComentarioForm(instance=comentario)
    return render(request,"comentario.html", {"form":form})
