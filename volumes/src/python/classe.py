class PC:

    cpu:str =  ''
    gpu:str =  ''
    psu:str =  ''

    def __init__(self, cpu:str):

        self.cpu = cpu

    def set_gpu(self, gpu:str):

        self.gpu = gpu

    def get_gpu(self):
        
        print(self.gpu)