#coding:utf-8

# printで endオプションを使うと何故かlaravel上で出力できない
import sys

oniki = [
        'lowF', 'lowF_s', 'lowG', 'lowG_s',
        'mid1A', 'mid1A_s', 'mid1B', 'mid1C', 'mid1C_s', 'mid1D', 'mid1D_s', 'mid1E', 'mid1F', 'mid1F_s', 'mid1G', 'mid1G_s',
        'mid2A', 'mid2A_s', 'mid2B', 'mid2C', 'mid2C_s', 'mid2D', 'mid2D_s', 'mid2E', 'mid2F', 'mid2F_s', 'mid2G', 'mid2G_s',
        'hiA', 'hiA_s', 'hiB', 'hiC', 'hiC_s', 'hiD', 'hiD_s', 'hiE', 'hiF', 'hiF_s', 'hiG', 'hiG_s',
        'hihiA', 'hihiA_s', 'hihiB']


def printAdjustKey(adjust_type, diff_key):
    if adjust_type   == '1OctaveDown': ad_oc = 12
    elif adjust_type == '1OctaveUp'  : ad_oc = -12
    else: ad_oc = 0

    print(adjust_type + ':', diff_key + ad_oc)
    if abs(diff_key + ad_oc) > 7: print('x')
    else: print('o')

def validation(argv):
    your_key = argv[1]
    target_key = argv[2]
    dict_oniki = {x:i for i, x in enumerate(oniki)}

    return dict_oniki, your_key, target_key

def adjustKey(argv):
    dict_oniki, your_key, target_key = validation(argv)
    print(your_key)
    print(target_key)

    diff_num = dict_oniki[your_key] - dict_oniki[target_key]
    dict_res = {'Original' : diff_num}
    dict_res['1OctaveDown'] = diff_num + 12
    dict_res['1OctaveUp'] = diff_num - 12

    for k, v in sorted(dict_res.items(), key = lambda x:abs(x[1])):
        print(k)
        print(v)
        break

if __name__ == "__main__":
    adjustKey(sys.argv)
